<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $client_data = Client::find(Auth::user()->id);
        $x = $client_data->company()->get();
        $company_data = $x{0};

        $visit_data = Company::find($company_data->id)->feedbacks();


        return view('client.dashboard',compact('client_data','company_data','visit_data'));
    }
}
