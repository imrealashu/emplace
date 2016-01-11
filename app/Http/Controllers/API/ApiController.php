<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class ApiController extends Controller{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function userNotFoundResponse(){
        return response()->json([
            'data' => 'User Not Found'
        ],404);
    }
}