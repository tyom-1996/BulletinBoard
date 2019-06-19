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


Route::get('/','mainController@index');

Route::get('/login','loginController@index')->name('login_page');
Route::post('/login','loginController@login');

Route::get('/register','registerController@index')->name('register_page');
Route::post('/register','registerController@register');

Route::get('/my-classifieds','userController@index')->name('myClassifieds');


Route::get('/logout','userController@getSignOut');

Route::get('/socket','mainController@socket');
