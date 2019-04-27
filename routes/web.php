<?php

use Illuminate\Support\Facades\Route;


//Route::resource('/', 'CrudController');
Route::get('/', 'CrudController@index')->name('home');

Route::get('/crud/create', 'CrudController@create');

Route::post('/crud/store', 'CrudController@store')->name('crud.store');

Route::get('crud/del/{id}', 'CrudController@destroy');

Route::get('crud/edit/{id}', 'CrudController@edit');

Route::put('/crud/up/{id}', 'CrudController@update')->name('crud.update');

//lembrar de cada metodo para cada funcao como PUT e POST
// php artisan route:list
