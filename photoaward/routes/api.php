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

Route::post('mpesa-response', 'PaymentController@mpesa_response')->name('mpesa-response');

Route::post('mpesa-reply', 'CartController@mpesa_reply')->name('mpesa-reply');

Route::get('album', 'HomeController@album')->name('album');

