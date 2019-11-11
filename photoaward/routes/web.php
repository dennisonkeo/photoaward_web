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

Route::get('newcart', function () {
    return view('newcart');
});


Route::get('imagepop', function () {
    return view('imagepop');
});

Route::get('under-construction', function () {
    return view('construction');
});

Route::get('stocksy', function () {
    return view('stocksy');
});

// Route::get('view-cart', function () {
//     return view('checkout');
// });

Route::get('pop', function () {
    return view('popup.index');
});

Route::get('prizes', function () {
    return view('prizes');
});

Route::get('modall', function () {
    return view('testModal');
})->name('modall');

Route::get('user-auth', function () {
    return view('cart_modal');
})->name('modall');

Route::get('guidelines', function () {
    return view('guidelines');
});

Route::get('entry-fee', function () {
    return view('fees');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('dash', function () {
    return view('dashboard.index');
});

Route::get('alert', function () {
    return view('popup_alert');
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

Route::get('about-competition', function () {
    return view('competition');
});

Route::get('/', function () {
    return view('about');
})->name('/');


Route::get('anything', function () {
    return view('untitled');

  });

Route::get('buy', function () {
    return view('buy');

  });

Route::get('jury', function () {
    return view('jury');

})->name('jury');

Route::get('votingg', function () {
    return view('voting_test');

});

// Route::get('mpesa-pay', 'PaymentController@store')->name('mpesa-pay');


// Route::get('view', function () {
//     return view('upload_view');
// });

// Route::get('like_image', function () {
//     return view('like_image');
// });

Route::get('stock-album', 'UploadController@stock')->name('stock-album');

Route::get('stock-view/{upload}', 'UploadController@stock_view')->name('stock-view');

Route::get('about', 'HomeController@about')->name('about');

Route::get('response', 'HomeController@response')->name('response');

Route::get('album', 'HomeController@album')->name('album');

Route::get('registration', 'HomeController@registration')->name('registration');

Route::post('register-user', 'HomeController@store')->name('register-user');

Route::post('signup_user', 'HomeController@signup_user')->name('signup_user');

Route::post('signup_buyer', 'HomeController@add_buyer')->name('signup_buyer');

Route::get('login', 'HomeController@login')->name('login');

Route::post('user-login', 'HomeController@login_user')->name('user-login');

Route::post('buyer-login', 'HomeController@login_buyer')->name('buyer-login');

Route::post('like-user-login', 'HomeController@login_user_like')->name('like-user-login');

Route::get('like-images', 'UploadController@display_like')->name('like-image');

Route::group(['middleware' => ['auth']], function () {

Route::get('admin-dashboard', 'AdminController@dashboard')->name('admin-dashboard');

Route::get('mpesa-pay', 'PaymentController@store')->name('mpesa-pay');

Route::get('download/{path}', 'CartController@download_image')->name('download');

Route::get('cart/mpesa/checkout', 'CartController@checkout')->name('cart/mpesa/checkout');

Route::get('cart/checkout/download', 'CartController@show_download')->name('cart/checkout/download');

Route::get('cart/view-cart', 'CartController@index')->name('cart/view-cart');

Route::get('profile', 'HomeController@profile')->name('profile');

Route::put('update-profile', 'HomeController@update')->name('update-profile');

Route::put('update', 'UploadController@update')->name('update');

Route::delete('delete-image/{upload}', 'UploadController@destroy')->name('delete-image');

Route::delete('cart/remove/{cart}', 'CartController@destroy')->name('cart/remove');

Route::get('get-image/{id}', 'UploadController@getImage')->name('get-image');

Route::post('add-cart', 'CartController@addToCart')->name('add-cart');

Route::post('add-like', 'UploadController@add_like')->name('add-like');

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('buy-image', 'UploadController@buy_image')->name('buy-image');

Route::get('like-image', 'UploadController@display_like')->name('like-image');

Route::get('upload-info', 'HomeController@upload_info')->name('upload-info');

Route::get('my-gallery', 'HomeController@my_gallery')->name('my-gallery');

Route::get('upload', 'HomeController@new_upload')->name('upload');

Route::get('uploaded', 'UploadController@save_upload')->name('uploaded');

Route::post('image-submit', 'UploadController@store')->name('image-submit');

Route::put('account-reset', 'HomeController@account_reset')->name('account-reset');

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
