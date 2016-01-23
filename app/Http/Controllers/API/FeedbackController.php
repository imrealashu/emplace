<?php

namespace App\Http\Controllers\API;

use App\Models\RestaurantFeedback;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends ApiController
{
    public function __construct(){

    }
    public function index(){

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkExistingUser(Request $request){
        if($request->phone){
            return $this->existingUserByPhoneNumber($request);
        }else if($request->email){
            return $this->existingUserByEmail($request);
        }else{
            return $this->userNotFoundResponse();
        }
    }

    /**
     *
     * Creates feedback
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createFeedback(Request $request){
        if($request->user_id == 0){
            return $this->createFeedbackForUnregisteredUsers($request);
        }
        return $this->createFeedbackForRegisteredUsers($request);
    }

    /**
     *
     * Creates Users and Feedback For Unregistered Users
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createFeedbackForUnregisteredUsers(Request $request){


        $user_id = DB::table('users')->insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->phone_no),
            'country_id' => $request->country_id,
            'phone' => $request->phone_no,
            'dob' => $request->dob,
            'anniversary' => $request->anniversary,
        ]);
        DB::table('restaurant_feedbacks')->insert([
            'food' => (int)$request->food,
            'ambiance' => (int)$request->service,
            'service' => (int)$request->ambiance,
            'no_of_people' => (int)$request->no_of_people,
            'bill_amount' => (int)$request->bill_amount,
            'comment' => $request->comment,
            'user_id' => $user_id,
            'branch_id' => (int)$request->branch_id
        ]);
        return response()->json(['data'=>['status'=> 'successfully added']],201);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createFeedbackForRegisteredUsers(Request $request){

        DB::table('restaurant_feedbacks')->insert([
            'food' => (int)$request->food,
            'ambiance' => (int)$request->service,
            'service' => (int)$request->ambiance,
            'no_of_people' => (int)$request->no_of_people,
            'bill_amount' => (int)$request->bill_amount,
            'comment' => $request->comment,
            'user_id' => (int)$request->user_id,
            'branch_id' => (int)$request->branch_id
        ]);
        return response()->json(['data'=>['status'=> 'successfully added']],201);
    }

    /**
     * @param $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function userData($user){
        return response()->json([
            'data'=>$user->get()
        ],200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function existingUserByPhoneNumber(Request $request){
        $user = User::where('phone',$request->phone);
        if(!$user->count()){
            return $this->userNotFoundResponse();
        }
        return $this->userData($user);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function existingUserByEmail(Request $request){
        $user = User::where('email',$request->email);
        if(!$user->count()){
            return $this->userNotFoundResponse();
        }
        return $this->userData($user);
    }
}
