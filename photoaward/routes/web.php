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

Route::get('pop', function () {
    return view('popup.index');
});

Route::get('dash', function () {
    return view('dashboard.index');
});

Route::get('categories', function () {
    return view('categories');
});

Route::get('slider', function () {
    return view('slider');
});
Route::get('imagelike', function () {
    return view('imagelike');
});

Route::get('like_image', function () {
    return view('like_image');
});

Route::get('/', function () {
    return view('about');
})->name('/');


Route::get('anything', function () {
    return view('untitled');

  });

Route::get('jury', function () {
    return view('jury');

})->name('jury');

Route::get('votingg', function () {
    return view('voting_test');

});


// Route::get('view', function () {
//     return view('upload_view');
// });

// Route::get('like_image', function () {
//     return view('like_image');
// });
Route::get('mpesa-pay', 'PaymentController@store')->name('mpesa-pay');

Route::get('about', 'HomeController@about')->name('about');

Route::get('response', 'HomeController@response')->name('response');

Route::get('album', 'HomeController@album')->name('album');

Route::get('registration', 'HomeController@registration')->name('registration');

Route::post('register-user', 'HomeController@store')->name('register-user');

Route::get('login', 'HomeController@login')->name('login');

Route::post('user-login', 'HomeController@login_user')->name('user-login');

Route::group(['middleware' => ['auth']], function () {

Route::get('profile', 'HomeController@profile')->name('profile');

Route::put('update-profile', 'HomeController@update')->name('update-profile');

Route::put('update', 'UploadController@update')->name('update');

Route::delete('delete-image/{upload}', 'UploadController@destroy')->name('delete-image');

Route::get('get-image/{id}', 'UploadController@getImage')->name('get-image');

Route::post('add-like', 'UploadController@add_like')->name('add-like');

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('like-image', 'UploadController@display_like')->name('like-image');

Route::get('upload-info', 'HomeController@upload_info')->name('upload-info');

Route::get('my-gallery', 'HomeController@my_gallery')->name('my-gallery');

Route::get('upload', 'HomeController@new_upload')->name('upload');

Route::get('uploaded', 'UploadController@save_upload')->name('uploaded');

Route::post('image-submit', 'UploadController@store')->name('image-submit');

Route::get('view-album', 'UploadController@view_cart')->name('view-album');

Route::get('image-detail', 'UploadController@index')->name('image-detail');

Route::get('upload-image/{id}', 'HomeController@upload_image')->name('upload-image');

Route::get('account-settings', 'HomeController@show_account')->name('account-settings');

Route::get('submit-entry', 'HomeController@show_submit')->name('submit-entry');

Route::get('admin', 'AdminController@index')->name('admin');

Route::get('jury-dash', 'JudgeRatingController@index')->name('jury-dash');

Route::get('category', 'CategoryController@index')->name('category');

Route::get('manage-admin', 'AdminController@manageAdmin')->name('manage-admin');

Route::get('manage-jury', 'JudgeRatingController@manageJury')->name('manage-jury');

Route::get('image-rating', 'JudgeRatingController@display_rating')->name('image-rating');

});
