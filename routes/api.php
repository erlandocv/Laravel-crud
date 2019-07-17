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

Route::get('blogposts', 'BlogPostController@index'); 
Route::get('blogpost/{id}', 'BlogPostController@show');  
Route::post('blogpost', 'BlogPostController@store'); 
Route::put('blogpost/{id}', 'BlogPostController@store'); 
Route::delete('blogpost/{id}', 'BlogPostController@destroy');

