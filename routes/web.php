<?php
use Illuminate\Support\Facades\Route;

/* --------Frontend----------*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('gioi-thieu', 'IntroController@index')->name('intro');

Route::get('lien-he', 'ContactController@index')->name('contact');

//Route::post('lien-he/gui-lien-he', 'ContactController@store')->name('contact.store');

Route::get('tin-tuc', 'NewsController@index')->name('news');

Route::group(array('prefix' => 'san-pham'), function (){
    Route::get('san-pham', 'ProductController@index')->name('product.index');
    Route::get('category', 'ProductController@show')->name('product.category');
    Route::get('{category}', 'ProductController@category')->name('product.category');
    Route::get('{category}/{product}', 'ProductController@show')->name('product.detail');
});

Route::get('he-thong-cua-hang', 'ShopController@index')->name('shop.index');

Route::group(['prefix' => 'customer', 'as' => 'customer.'], function (){
    Route::get('dang-nhap', 'CustomerController@login')->name('login');
    Route::post('dang-nhap', 'CustomerController@handleLogin')->name('handle.login');
    Route::get('dang-ky', 'CustomerController@register')->name('register');
    Route::post('dang-ky', 'CustomerController@handleRegister')->name('handle.register');
    Route::get('dang-xuat', 'CustomerController@logout')->name('logout');
    Route::get('/oauth/{driver}', 'SocialLoginController@redirectToProvider')->name('social.oauth');
    Route::get('/oauth/{driver}/callback', 'SocialLoginController@handleProviderCallback')->name('social.callback');
    Route::get('quen-mat-khau', 'CustomerController@forgotPassword')->name('forgot');
    Route::post('send-mail', 'CustomerController@sendLink')->name('send.mail');
    Route::get('thay-doi-mat-khau/{token}', 'CustomerController@showChangePassword')->name('change.password');
    Route::post('khoi-phuc-mat-khau', 'CustomerController@restorePassword')->name('restore');
});

Route::get('gio-hang', 'CartController@index')->name('cart.index');

Route::get('thanh-toan', 'CheckoutController@index')->name('checkout.index');


//---------Backend--------
Auth::routes();
Route::get('/dashboard', 'Admin\AdminController@index')->middleware('auth');

Route::group(array('prefix' => 'admin/', 'namespace' => 'Admin', 'middleware' => 'auth'), function () {
    Route::resource('banners', 'BannersController');
    Route::resource('products', 'ProductController');
    Route::get('products_list/{id}', 'ProductController@list_all')->name('products.list');
    Route::resource('contacts', 'ContactsController');
    Route::resource('news', 'NewsController');
    Route::resource('categories', 'CategoriesController');
    Route::get('sitemap', 'CategoriesController@sitemap')->name('categories.sitemap');
    Route::resource('users', 'UsersController');
    //Users
    Route::post('changeStatusUser/{id}', 'UsersController@changeStatusUser')->name('users.changeStatus');
    Route::post('changePassword', 'UsersController@changePassword')->name('admin.changePassword');
    Route::get('profile', 'UsersController@profile');
    Route::post('updateProfile', 'UsersController@updateProfile');
    Route::post('changeStatusUser/{id}', 'UsersController@changeStatusUser');
    Route::post('deleteUsers/{id}', 'UsersController@deleteUsers');

    Route::get('changeStatusContact/{id}', 'ContactsController@changeStatus')->name('contact.changeStatus');
});