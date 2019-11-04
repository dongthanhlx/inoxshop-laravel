<?php

use Illuminate\Support\Facades\Route;
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', 'HomeController@index');
Route::resource('products', 'PageController');
Route::resource('data', 'MakeDataController');
Route::resource('pages', 'PageController');
Route::post('/autocomplete', 'ProductController@fetch')->name('autocomplete.fetch');
