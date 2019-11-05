<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');
Route::resource('data', 'PageController');

Route::get('products/{slug}', 'PageController@show');
Route::get('pages/{slug}', 'PageController@show');
Route::post('autocomplete', 'ProductController@fetch')->name('autocomplete.fetch');
