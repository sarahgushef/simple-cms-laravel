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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', 'StudentController@index');
Route::post('/students/create', 'StudentController@create');
Route::get('/students/{id}/update-page', 'StudentController@updatePage');
Route::post('/students/{id}/update', 'StudentController@update');

