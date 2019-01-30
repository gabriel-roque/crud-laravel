<?php

use Illuminate\Support\Facades\Route;


Route::resource('/', 'CrudController');

Route::get('/crud/create', 'CrudController@create');
Route::post('/crud/store', 'CrudController@store')->name('crud.store');