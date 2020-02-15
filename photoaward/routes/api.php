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

Route::get('get-images', 'MobileAppController@getImages')->name('get-images');

Route::post('registration', 'MobileAppController@registration')->name('registration');

Route::get('album', 'HomeController@album')->name('album');

Route::get('categories', 'MobileAppController@categories')->name('categories');

Route::post('login', 'MobileAppController@login');

Route::get('check_login', 'MobileAppController@user_loggedin');

Route::get('logout', 'MobileAppController@logout');

Route::get('likes/{id}', 'MobileAppController@get_rate_count');

Route::post('mpesa-response', 'PaymentController@mpesa_response')->name('mpesa-response');

Route::post('mpesa-reply', 'CartController@mpesa_reply')->name('mpesa-reply');

Route::group(['middleware' => 'auth:api'], function(){

Route::get('like-image/{upload_id}', 'MobileAppController@like_image')->name('like-image');

Route::post('upload', 'MobileAppController@store')->name('upload');

Route::get('cart', 'MobileAppController@cart')->name('cart');

Route::get('cart-photos', 'MobileAppController@cart_photos')->name('cart-photos');

Route::get('upload-payment', 'PaymentController@store')->name('upload-payment');

Route::get('history', 'MobileAppController@history')->name('history');

Route::get('my-gallery', 'MobileAppController@getUserImages')->name('my-gallery');

Route::put('update', 'MobileAppController@update')->name('update');

Route::delete('delete-photo/{upload}', 'MobileAppController@destroy')->name('delete-photo');

});



