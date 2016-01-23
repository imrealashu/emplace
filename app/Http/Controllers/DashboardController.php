<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Models\Branch;
use App\Models\Company;
use App\Models\RestaurantFeedback;
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
     * @var $client_data - get the client information
     * @return Response
     */
    public function index()
    {
        $client_data = Client::find(Auth::user()->id);
        $branch_data = $client_data->branch()->first();  //get the client branch information

        $visit_data = Branch::find($branch_data->id)->feedback();
        $total_visit = $visit_data->count();
        $returning_user = $visit_data->groupBy('user_id')->get()->count();

        $awesome_food= RestaurantFeedback::awesomeFood($branch_data->id)->count();
        $good_food = RestaurantFeedback::goodFood($branch_data->id)->count();
        $average_food = RestaurantFeedback::averageFood($branch_data->id)->count();
        $bad_food = RestaurantFeedback::badFood($branch_data->id)->count();

//        array_push($_food_array,$awesome_food,$good_food,$average_food,$bad_food);

        $awesome_service= RestaurantFeedback::awesomeService($branch_data->id)->count();
        $good_service = RestaurantFeedback::goodService($branch_data->id)->count();
        $average_service = RestaurantFeedback::averageService($branch_data->id)->count();
        $bad_service = RestaurantFeedback::badService($branch_data->id)->count();

        $awesome_ambiance= RestaurantFeedback::awesomeAmbiance($branch_data->id)->count();
        $good_ambiance = RestaurantFeedback::goodAmbiance($branch_data->id)->count();
        $average_ambiance = RestaurantFeedback::averageAmbiance($branch_data->id)->count();
        $bad_ambiance = RestaurantFeedback::badAmbiance($branch_data->id)->count();

        $average_rating =  RestaurantFeedback::averageRating($branch_data->id)->first();


        return view('client.dashboard',compact(
            'client_data',
            'branch_data',
            'total_visit',
            'returning_user',
            'visit_data',
            'awesome_food',
            'good_food',
            'average_food',
            'food_array',
            'bad_food',
            'awesome_service',
            'good_service',
            'average_service',
            'bad_service',
            'awesome_ambiance',
            'good_ambiance',
            'average_ambiance',
            'bad_ambiance',
            'average_rating'
        ));
    }
}
