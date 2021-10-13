<?php

/* --------Frontend----------*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('gioi-thieu', 'IntroController@index')->name('intro');

Route::get('lien-he', 'ContactController@index')->name('contact');

//Route::post('lien-he/gui-lien-he', 'ContactController@store')->name('contact.store');

Route::get('tin-tuc', 'NewsController@index')->name('news');

//Route::group(array('prefix' => 'san-pham'), function (){
    Route::get('san-pham', 'ProductController@index')->name('product.index');
    Route::get('category', 'ProductController@show')->name('product.category');
//    Route::get('{category}/{product}', 'ProductController@show')->name('product.detail');
//});

Route::get('he-thong-cua-hang', 'ShopController@index')->name('shop.index');

Route::group(array('prefix' => 'customer'), function (){
    Route::get('login', 'CustomerController@login')->name('customer.login');
    Route::get('register', 'CustomerController@register')->name('customer.register');
});

Route::get('gio-hang', 'CartController@index')->name('cart.index');

Route::get('thanh-toan', 'CheckoutController@index')->name('checkout.index');


