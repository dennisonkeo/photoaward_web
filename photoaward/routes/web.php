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

Route::get('index', function () {
    return view('index');
});
Route::get('categories', function () {
    return view('categories');
});

Route::get('slider', function () {
    return view('slider');
});

Route::get('/', function () {
    return view('index2');
});

// Route::get('view', function () {
//     return view('upload_view');
// });

Route::get('slidder', function () {
    return view('slidder');
});

Route::get('about', 'HomeController@about')->name('about');

Route::get('registration', 'HomeController@registration')->name('registration');

Route::post('register-user', 'HomeController@store')->name('register-user');

Route::get('login', 'HomeController@login')->name('login');

Route::post('user-login', 'HomeController@login_user')->name('user-login');

Route::group(['middleware' => ['auth']], function () {

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('upload-info', 'HomeController@upload_info')->name('upload-info');

Route::get('upload', 'HomeController@new_upload')->name('upload');

Route::post('image-submit', 'UploadController@store')->name('image-submit');

Route::get('image-detail', 'UploadController@index')->name('image-detail');

Route::get('upload-image', 'HomeController@upload_image')->name('upload-image');

Route::get('submit-entry', 'HomeController@show_submit')->name('submit-entry');

});
