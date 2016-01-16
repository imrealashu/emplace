<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
        $x = $client_data->branch()->get();
        $branch_data = $x{0};

//        return $x{0}->id;
        $visit_data = Branch::find($x{0}->id)->feedback();


        return view('client.dashboard',compact('client_data','branch_data','visit_data'));
    }
}
