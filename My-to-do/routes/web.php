<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home');

Route::get('/service', 'HomeController@service');

Route::post('/buat/', 'HomeController@add');

Route::delete('/delete/{title:judul}', 'HomeController@delete');

Route::get('/post/{update:judul}/edit', 'HomeController@edit');

Route::patch('/post/{update:judul}/edit', 'HomeController@upd');
