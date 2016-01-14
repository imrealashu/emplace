<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller{

    private $statusCode = 200;

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found'){
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /**
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = ['Access-Control-Allow-Origin' => '*']){
        return Response::json($data, $this->getStatusCode(),$headers);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondWithError($message){
        return $this->respond([
            'error' => [
                'message'=> $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }
    public function respondForbidden($message){
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    public function accessFile($resource){
        if(Auth::user()){
            return $resource;
        }else{
            return $this->setStatusCode(403)->respondForbidden('You do not have permission to view that particular resource');
        }
    }
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function userNotFoundResponse(){
        return response()->json([
            'data' => 'User Not Found'
        ],404);
    }
}