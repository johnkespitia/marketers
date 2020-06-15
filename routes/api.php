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


Route::post('business', 'BusinessController@store');
Route::get('business', 'BusinessController@index');
Route::group(['middleware' => 'auth:api'], function() {
    //Logout
    Route::post('logout', 'Auth\LoginController@logout');

    //Business routes
    //Route::get('business', 'BusinessController@index');
    Route::get('business/{business}', 'BusinessController@show');
    Route::put('business/{business}', 'BusinessController@update');
    Route::delete('business/{business}', 'BusinessController@delete');
    
    //Campaign routes
    Route::get('campaign', 'CampaignController@index');
    Route::get('campaign/{campaign}', 'CampaignController@show');
    Route::post('campaign', 'CampaignController@store');
    Route::put('campaign/{campaign}', 'CampaignController@update');
    Route::delete('campaign/{campaign}', 'CampaignController@delete');

    //Chanel routes
    Route::get('chanel', 'ChanelController@index');
    Route::get('chanel/{chanel}', 'ChanelController@show');
    Route::post('chanel', 'ChanelController@store');
    Route::put('chanel/{chanel}', 'ChanelController@update');
    Route::delete('chanel/{chanel}', 'ChanelController@delete');

    //Client routes
    Route::get('client', 'ClientController@index');
    Route::get('client/{client}', 'ClientController@show');
    Route::post('client', 'ClientController@store');
    Route::put('client/{client}', 'ClientController@update');
    Route::delete('client/{client}', 'ClientController@delete');

    //ClientPhase routes
    Route::get('client-phase', 'ClientPhaseController@index');
    Route::get('client-phase/{clientPhase}', 'ClientPhaseController@show');
    Route::post('client-phase', 'ClientPhaseController@store');
    Route::put('client-phase/{clientPhase}', 'ClientPhaseController@update');
    Route::delete('client-phase/{clientPhase}', 'ClientPhaseController@delete');

    //Contacts routes
    Route::get('contacts', 'ContactsController@index');
    Route::get('contacts/{contacts}', 'ContactsController@show');
    Route::post('contacts', 'ContactsController@store');
    Route::put('contacts/{contacts}', 'ContactsController@update');
    Route::delete('contacts/{contacts}', 'ContactsController@delete');

    //ContactsTypes routes
    Route::get('contact-types', 'ContactTypesController@index');
    Route::get('contact-types/{contactTypes}', 'ContactTypesController@show');
    Route::post('contact-types', 'ContactTypesController@store');
    Route::put('contact-types/{contactTypes}', 'ContactTypesController@update');
    Route::delete('contact-types/{contactTypes}', 'ContactTypesController@delete');

    //Group routes
    Route::get('group', 'GroupController@index');
    Route::get('group/{group}', 'GroupController@show');
    Route::post('group', 'GroupController@store');
    Route::put('group/{group}', 'GroupController@update');
    Route::delete('group/{group}', 'GroupController@delete');

    //Sale routes
    Route::get('Sale', 'SaleController@index');
    Route::get('Sale/{sale}', 'SaleController@show');
    Route::post('Sale', 'SaleController@store');
    Route::put('Sale/{sale}', 'SaleController@update');
    Route::delete('Sale/{sale}', 'SaleController@delete');

    //Sale routes
    Route::get('Sale', 'SaleController@index');
    Route::get('Sale/{sale}', 'SaleController@show');
    Route::post('Sale', 'SaleController@store');
    Route::put('Sale/{sale}', 'SaleController@update');
    Route::delete('Sale/{sale}', 'SaleController@delete');

    //Schedule routes
    Route::get('schedule', 'ScheduleController@index');
    Route::get('schedule/{schedule}', 'ScheduleController@show');
    Route::post('schedule', 'ScheduleController@store');
    Route::put('schedule/{schedule}', 'ScheduleController@update');
    Route::delete('schedule/{schedule}', 'ScheduleController@delete');

    //Service routes
    Route::get('service', 'ServiceController@index');
    Route::get('service/{service}', 'ServiceController@show');
    Route::post('service', 'ServiceController@store');
    Route::put('service/{service}', 'ServiceController@update');
    Route::delete('service/{service}', 'ServiceController@delete');

    //User routes
    Route::get('user', 'UserController@index');
    Route::get('user/{user}', 'UserController@show');
    Route::post('user', 'UserController@store');
    Route::put('user/{user}', 'UserController@update');
    Route::delete('user/{user}', 'UserController@delete');
});
