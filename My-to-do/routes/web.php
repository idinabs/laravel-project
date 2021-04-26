<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home');
Route::post('/buat/', 'HomeController@add');
Route::delete('/delete/{title:judul}', 'HomeController@delete');