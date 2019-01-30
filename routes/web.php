<?php

use Illuminate\Support\Facades\Route;


Route::resource('/', 'CrudController');

Route::get('/crud/create', 'CrudController@create');