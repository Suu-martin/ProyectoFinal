<?php
//HOME
Route::get('/', 'ProductsController@listado');
Route::get('/home', 'ProductsController@listado');

//CONTACT
Route::get('/contact', 'ContactController@index');

//CART
Route::get('/cart', 'CartController@index');
Route::get('/cart/remove/{item}', 'CartController@delItem');

//USER
Route::get('/editProfile', 'ProfilesController@edit')->middleware('isLogIn');
Route::post('/editProfile', 'ProfilesController@update')->middleware('isLogIn');
Route::get('/profile', 'ProfilesController@show')->middleware('isLogIn');

//PRODUCT
Route::get('/productList', 'ProductsController@list');
Route::get('/product/{id}', 'ProductsController@detail');

//BRANDS
Route::get('/brand', 'BrandsController@list');

//FAQ'S
Route::get('/faq', 'FaqsController@list');
Route::get('/faq/{id}', 'FaqsController@detail');

//ADMIN
Route::get('/admin', 'AdminController@index')->middleware('Admin');
Route::get('/admin/products', 'AdminController@products')->middleware('Admin');
Route::get('/admin/addProduct', 'ProductsController@addPForm')->middleware('Admin');
Route::post('/admin/addProduct', 'ProductsController@add')->middleware('Admin');
Route::get('/admin/editProduct/{id}', 'ProductsController@edit')->middleware('Admin');
Route::post('/admin/editProduct/{id}', 'ProductsController@update')->middleware('Admin');
Route::post('/admin/deleteProduct', 'ProductsController@delete')->middleware('Admin');
Route::get('/admin/products', 'ProductsController@lis')->middleware('Admin');
Route::get('/admin/addProduct', 'ProductsController@li')->middleware('Admin');
Route::get('/addFaq', 'FaqsController@addform')->middleware('Admin');
Route::post('/addFaq', 'FaqsController@add')->middleware('Admin');
Route::post('/deleteFaq', 'FaqsController@delete')->middleware('Admin');
Route::get('/admin/faqList', 'FaqsController@li')->middleware('Admin');

//AUTH
Auth::routes();
