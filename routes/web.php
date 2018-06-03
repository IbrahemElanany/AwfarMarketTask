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

Route::resource('/adminpanel/users', 'UsersController');

Route::post('/adminpanel/users/{id}', 'UsersController@changePassword');

Route::get('/adminpanel/users/{id}/delete', 'UsersController@destroy');
