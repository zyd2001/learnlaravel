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

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/delete', 'PostsController@delete');

Route::post('/posts/{post}/comment', 'CommentsController@store');

Route::get('/user/register', 'RegistrationController@create');
// Route::get('/register', 'RegistrationController@deny');
Route::post('/user/register', 'RegistrationController@store');

Route::get('/user/login', 'SessionsController@create')->name('login');
Route::post('/user/login', 'SessionsController@store');

Route::get('/user/logout', 'SessionsController@destroy');
Route::post('/user/logout', 'SessionsController@destroy');

Route::get('/user/{user}', 'UserController@create');
Route::post('/user/{user}', 'UserController@create');

Route::get('/phpinfo', function () {
    phpinfo();
});