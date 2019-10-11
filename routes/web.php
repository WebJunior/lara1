<?php

Route::get('/', 'ImagesController@index');
Route::get('/about', 'HomeController@about');
Route::get('/create', 'ImagesController@create');
Route::get('/show/{id}', 'ImagesController@show');
Route::get('/edit/{id}', 'ImagesController@edit');
Route::get('/delete/{id}', 'ImagesController@delete');
Route::post('/store', 'ImagesController@store');
Route::post('/update/{id}', 'ImagesController@update');