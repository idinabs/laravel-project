<?php

use Illuminate\Support\Facades\Route;

// root
Route::get('/', 'CrudController@home');
Route::get('/post/', 'CrudController@post');
Route::get('/post/{post:slug}/show/', 'CrudController@show');

// create data
Route::get('/post/add/', 'CrudController@add');
Route::post('/post/create/', 'CrudController@create');


// update data
Route::get('/post/{post:slug}/edit', 'CrudController@edit');
Route::patch('/post/{post:slug}/edit', 'CrudController@update');


Route::delete('post/{post:slug}/delete', 'CrudController@destroy');

