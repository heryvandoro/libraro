<?php

Route::get('/', "PagesController@index");
Route::get('/books', "BookController@index");
Route::get('/books/{slug}', "BookController@show");