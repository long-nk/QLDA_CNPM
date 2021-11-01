<?php

/* --------Frontend----------*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('gioi-thieu', 'IntroController@index')->name('intro');

Route::get('lien-he', 'ContactController@index')->name('contact');

Route::get('tin-tuc', 'NewsController@index')->name('news');

Route::get('san-pham', 'ProductController@index')->name('product.index');
Route::get('category', 'ProductController@show')->name('product.category');

Route::get('he-thong-cua-hang', 'ShopController@index')->name('shop.index');

Route::group(['prefix' => 'customer', 'as' => 'customer.'], function (){
    Route::get('login', 'CustomerController@login')->name('login');
    Route::post('login', 'CustomerController@handleLogin')->name('handle.login');
    Route::get('register', 'CustomerController@register')->name('register');
    Route::post('register', 'CustomerController@handleRegister')->name('handle.register');
    Route::get('logout', 'CustomerController@logout')->name('logout');
    Route::get('/oauth/{driver}', 'SocialLoginController@redirectToProvider')->name('social.oauth');
    Route::get('/oauth/{driver}/callback', 'SocialLoginController@handleProviderCallback')->name('social.callback');
});


