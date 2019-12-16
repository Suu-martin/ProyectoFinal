<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
  return view('contact');
});
Route::get('/profile', function() {
  return view('profile');
});

Route::get('/home', 'ProductsController@listado');
Route::post('/home', 'ProductsController@detail');
Route::get('/productList', 'ProductsController@list');

Route::get('/brand', 'BrandsController@list');

Route::get('/addFaq', 'FaqsController@addform');
Route::post('/addFaq', 'FaqsController@add');
Route::get('/faq', 'FaqsController@list');
Route::get('/faq/{id}', 'FaqsController@detail');
Route::post('/deleteFaq', 'FaqsController@delete');

Auth::routes();
