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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register/client', 'Auth\RegisterController@showRegistrationFormClient')->name('register_client');
Route::get('/register/salon', 'Auth\RegisterController@showRegistrationFormSalon')->name('register_salon');

Route::post('/register/client', 'Auth\RegisterController@registerClient')->name('register_client');
Route::post('/register/salon', 'Auth\RegisterController@registerSalon')->name('register_salon');
