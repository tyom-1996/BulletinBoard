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

Route::get('/my-classifieds','profileController@index')->name('myClassifieds');
Route::get('/my-messages','profileController@myMessages')->name('myMessages');


Route::get('/logout','profileController@getSignOut');


//UPLOAD PROFILE PHOTO

Route::post('/upload_profile_photo','profileController@uploadProfilePhoto');

//DELETE PROFILE PHOTO

Route::post('/delete_photo','profileController@deleteProfilePhoto');


Route::get('/socket','mainController@socket');
