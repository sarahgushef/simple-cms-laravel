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

Route::get('/login', 'AuthController@loginPage')->name('login'); // name itu ngasih nama route. Di sini namanya login karena di App\Http\Middlewar\Authenticate mereturn route yang namanya login (bukan path /login)
Route::post('/login', 'AuthController@login');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'AuthController@logout');

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/students', 'StudentController@index');
    Route::post('/students/create', 'StudentController@create');
    Route::get('/students/{id}/update-page', 'StudentController@updatePage');
    Route::put('/students/{id}/update', 'StudentController@update');
    Route::get('/students/{id}/delete', 'StudentController@delete');
});


