<?php


Route::get('/','ProductController@index')->name('home');
Route::get('/product','ProductController@product')->name('main');
Route::post('/interval','IntervalPriceController@store')->name('new_interval');
Route::post('/check','IntervalPriceController@checkData')->name('check_data');
Route::delete('/destroy','IntervalPriceController@destroy')->name('destroy');
Route::post('/schedule','IntervalPriceController@schedule')->name('schedule');
Route::post('/change','ProductController@change')->name('change_price');