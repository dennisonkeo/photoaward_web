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

Route::get('/', function () {
    return view('index');
});

Route::get('about', 'HomeController@about')->name('about');

Route::get('registration', 'HomeController@registration')->name('registration');

Route::get('login', 'HomeController@login')->name('login');

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('submit-entry', 'HomeController@show_submit')->name('submit-entry');

Route::post('user-login', 'HomeController@login_user')->name('user-login');

Route::post('register-user', 'HomeController@store')->name('register-user');
