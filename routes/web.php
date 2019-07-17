<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/','userController@welcomeMainPage');

Route::get('/login','userController@openLoginPage')->name('login_page');
Route::post('/login','userController@login');

Route::get('/register','userController@openRegisterPage')->name('register_page');
Route::post('/register','userController@register');

Route::get('/my-classifieds','profileController@index')->name('myClassifieds');
Route::get('/my-messages','profileController@myMessages')->name('myMessages');

Route::get('/new-product','postController@openNewProductPage');


Route::get('/logout','profileController@getSignOut');

//UPLOAD PROFILE PHOTO

Route::post('/upload_profile_photo','profileController@uploadProfilePhoto');

//DELETE PROFILE PHOTO

Route::post('/delete_photo','profileController@deleteProfilePhoto');


Route::get('/socket','mainController@socket');


//TEST

Route::get('/chat-bot', function () {
    return view('test.botTest');
});



/*
|--------------------------------------------------------------------------
| Web Routes Firebase
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/firebase', function () {
    return view('test');
});

Route::post('/test',function(){
    var_dump('test');
});
