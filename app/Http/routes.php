<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('web.home');
//    $auth = auth()->guard('admin');
//
//    $credentials = [
//        'email' =>  'imrealashu@gmail.com',
//        'password' =>  'ashish',
//    ];
//
//    if ($auth->attempt($credentials)) {
//        return 'Success';
//    } else {
//        return 'Not Success';
//    return Auth::user();
//    }
    });
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//Authenticates the client
Route::post('/api/client/login','API\AuthController@authenticate');

Route::group(['middleware' =>['jwt']],function(){
    Route::get('/api/client/','API\AuthController@getAuthenticatedUser');
    Route::get('/api/client/check_existing_user','API\FeedbackController@checkExistingUser');
    Route::get('/api/client/feedback','API\FeedbackController@index');
    Route::post('/api/client/feedback','API\FeedbackController@createFeedback');
});

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');
    Route::get('/admin', 'AdminController@index');

});

Route::group(['middleware' => ['web']], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::post('/contact-us','ContactUsController@create');
});