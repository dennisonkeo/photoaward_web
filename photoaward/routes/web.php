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
    return view('about');
});


Route::get('anything', function () {
    return view('untitled');

  });

Route::get('jury', function () {
    return view('jury');

});

// Route::get('view', function () {
//     return view('upload_view');
// });

Route::get('like_image', function () {
    return view('like_image');
});

Route::get('about', 'HomeController@about')->name('about');

Route::get('registration', 'HomeController@registration')->name('registration');

Route::post('register-user', 'HomeController@store')->name('register-user');

Route::get('login', 'HomeController@login')->name('login');

Route::post('user-login', 'HomeController@login_user')->name('user-login');

Route::group(['middleware' => ['auth']], function () {

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('upload-info', 'HomeController@upload_info')->name('upload-info');

Route::get('my-gallery', 'HomeController@my_gallery')->name('my-gallery');

Route::get('upload', 'HomeController@new_upload')->name('upload');

Route::post('image-submit', 'UploadController@store')->name('image-submit');

Route::get('image-detail', 'UploadController@index')->name('image-detail');

Route::get('upload-image/{id}', 'HomeController@upload_image')->name('upload-image');

Route::get('submit-entry', 'HomeController@show_submit')->name('submit-entry');

});
