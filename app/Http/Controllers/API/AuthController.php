<?php

namespace App\Http\Controllers\API;

use Acme\Transformers\ClientTransformer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends ApiController
{
    protected $clientTransformer;

    public function __construct(ClientTransformer $clientTransformer){
        $this->clientTransformer = $clientTransformer;
    }
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials','code' => 401], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token', 'code' => 500], 500);
        }

        // all good so return the token
        return response()->json(['data'=>['token'=>$token]]);
    }
    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                $this->userNotFoundResponse();
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());
        }

        // the token is valid and we have found the user via the sub claim
        return $this->respond([
            'data' => $this->clientTransformer->transformLong($user->toArray())
        ]);
//        return response()->json(['data'=>$this->clientTransformer->transform($user)]);
    }

}
