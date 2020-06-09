<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Business;

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
 
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('business', 'BusinessController@index');
    Route::get('business/{business}', 'BusinessController@show');
    Route::post('business', 'BusinessController@store');
    Route::put('business/{business}', 'BusinessController@update');
    Route::delete('business/{business}', 'BusinessController@delete');
    
});