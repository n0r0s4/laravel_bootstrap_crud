<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ItemController@list');

Route::get('items/create', 'ItemController@create');
Route::post('items/create', 'ItemController@store');

Route::get('items/update/{id}', 'ItemController@updateForm');
Route::post('items/update', 'ItemController@update');

Route::get('items/remove/{id}', 'ItemController@removeConf');
Route::post('items/remove', 'ItemController@remove');
