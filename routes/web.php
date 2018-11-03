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

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/chat', function() {
// 	return view('chat.index');
// });

// Route::get('/profile', function() {
// 	return view('profile.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/chat', 'ChatsController');
Route::resource('/profile', 'ProfileController');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

