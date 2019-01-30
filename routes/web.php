<?php

use Illuminate\Support\Facades\Route;


Route::resource('/', 'CrudController');

Route::get('/crud/create', 'CrudController@create');

Route::post('/crud/store', 'CrudController@store')->name('crud.store');

Route::get('crud/del/{id}', 'CrudController@destroy');

Route::get('crud/edit/{id}', 'CrudController@edit');
