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

Route::get('/test', 'TestController@fileForm')->name('test');
Route::post('/test/upload', 'TestController@upload')->name('test.file.upload');

Route::get('/', 'User\PagesController@home')->name('users.home');
Route::get('/about', 'User\PagesController@about')->name('users.about');
Route::get('/contact', 'User\PagesController@contact')->name('users.contact');

Route::group(['middleware' => ['guest']], function() {
  Route::post('/register', 'User\RegisterController@register')->name('users.register');
  Route::get('/usernames', 'User\RegisterController@usernames')->name('users.usernames');
});

// Route::group(['middleware' => ['auth']], function() {
//   Route::post('/login', 'User\')
// })
