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

Route::middleware('api')->get('/hello_world', function (){
    return json_encode(['message' => 'hello world']);
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    
    Route::post('register', 'RegisterController@create');
    Route::get('/hello_world', function (){
        return json_encode(['message' => 'hello world']);
    });


    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});