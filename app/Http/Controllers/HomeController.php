<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::user())
            return redirect('/dashboard');
        return view('web.home');
    }
    public function create(Request $request){

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'email' => 'required|max:55',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        DB::table('contact_us')->insert([
            'email' => $request->email,
            'phone_no' => $request->phone_no
        ]);
        $request->session()->flash('success_message','Thank you for sharing your details with us. We\'ll contact you soon.');
        return redirect('/#contact');
    }
}
