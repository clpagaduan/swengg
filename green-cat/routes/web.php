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


Auth::routes();

//Green-Cat Application Routes
//Prepared by: John Edel B. Tamani

//Core Controllers

//Logical Controllers
Route::post('loginAuthenticate','AuthenticateLoginUserController@authenticate');
Route::post('signupRegistration','ProcessSignUpController@process');
Route::post('editUserProfile','EditUserProfileController@process');
Route::get('logout', 'LogoutUserController@logout');

//Group controllers
Route::middleware(['AccessAuthRoutes'])->group(function (){
    Route::resource('/','LoginController');
    Route::resource('signup','SignUpController');
    Route::resource('profile','ProfileController');
});

Route::middleware(['CheckLoginRoute'])->group(function (){
    Route::resource('swipematch','SwipeMatchController');
    Route::resource('message','MessageController');
});