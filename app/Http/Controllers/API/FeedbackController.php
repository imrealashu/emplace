<?php

namespace App\Http\Controllers\API;

use App\Models\RestaurantFeedback;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        if($request[0]['user_id'] == 0){
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
        $data = $request[0];
        $user_id = DB::table('users')->insertGetId([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['phone_no']),
            'country_id' => $data['country_id'],
            'phone' => $data['phone_no'],
            'dob' => $data['dob'],
            'anniversary' => $data['anniversary'],
        ]);
        DB::table('restaurant_feedbacks')->insert([
            'food' => $data['food'],
            'ambiance' => $data['service'],
            'service' => $data['service'],
            'no_of_people' => $data['no_of_people'],
            'bill_amount' => $data['bill_amount'],
            'comment' => $data['comment'],
            'user_id' => $user_id,
            'branch_id' => $data['branch_id']
        ]);
        return response()->json(['data'=>['status'=> 'successfully added']],201);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createFeedbackForRegisteredUsers(Request $request){
        $data = $request[0];
        DB::table('restaurant_feedbacks')->insert([
            'food' => $data['food'],
            'ambiance' => $data['service'],
            'service' => $data['service'],
            'no_of_people' => $data['no_of_people'],
            'bill_amount' => $data['bill_amount'],
            'comment' => $data['comment'],
            'user_id' => $data['user_id'],
            'branch_id' => $data['branch_id']
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
        ]);
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
