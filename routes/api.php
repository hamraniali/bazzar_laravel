<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

/// Main Page Route
Route::get('home' , 'API\HomeController@index');

/// App Routes
Route::get('showApp/{id}' , 'API\AppController@show');

//// Categories Routes
Route::get('categories' , 'API\CategoryController@index');
//Route::get('categoryApps/{id}' , 'API\CategoryController@showApps');


