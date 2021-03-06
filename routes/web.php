<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//landing page route
Route::get('/',function () {

    return view('welcome');

});

//generic & informational routes
Route::get('/about', function () {

    return view('about');

});

Route::get('/unauthorized', function () {

    return view('unauthorized');

});


//positions and portfolios routes
Route::get('/portfolio','PositionsController@index')->middleware('superuser');


//users routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('superuser/routes', 'HomeController@superuser')->middleware('SuperUser');

//middleware routes

// Route::group([‘middleware’ => ‘App\Http\Middleware\CheckEmail’], function() {

// 	Route::match([‘get’, ‘post’], ‘/adminOnlyPage/’, ‘HomeController@admin’);

// });
