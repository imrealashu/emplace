<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function index(){

    }
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:55',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        DB::table('contact_us')->insert([
            'email' => $request->email,
            'phone_no' => $request->phone_no
        ]);
        $request->session()->flash('success_message','Successfully Submitted');
        return redirect('/contact-us#contact');
    }
}
