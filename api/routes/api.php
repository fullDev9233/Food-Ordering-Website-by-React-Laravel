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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/food','FoodController')->except(["create","edit"]);
Route::resource('/category','FoodCategoryController')->except(["create","edit"]);
Route::post('/login','UserController@Login');
Route::post('/Register','UserController@Register');
Route::post('/food/comment','FoodController@createComment');
Route::post('/food/updatecomment','FoodController@updateComment');
Route::post('/food/deletecomment/','FoodController@deleteComment');

