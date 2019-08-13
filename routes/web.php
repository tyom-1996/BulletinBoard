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


//NEW POST;

Route::get('/new-post-part-1','postController@open_New_Post_Page_Part_1');
Route::get('/new-post-part-2','postController@open_New_Post_Page_Part_2')->name('new-post-part-2');

//LOGOUT

Route::get('/logout','profileController@getSignOut');

//UPLOAD PROFILE PHOTO

Route::post('/upload_profile_photo','profileController@uploadProfilePhoto');

//DELETE PROFILE PHOTO

Route::post('/delete_photo','profileController@deleteProfilePhoto');


//Add new product

Route::post('/add-new-product','postController@addNewProduct');


Route::get('/socket','mainController@socket');


//Delete

Route::post('/delete-classified','postController@deleteMyPost');

//Edit

Route::get('/edit-post/{id}','postController@editClassifiedsPage')->name('edit-post');
Route::post('/edit-post','postController@editMyPost');


Route::get('/post/{id}','postController@singlePostPage')->name('single-post');

Route::post('/delete-image','postController@deletePostImage');

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
