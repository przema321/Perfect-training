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

Route::post('message', 'MessengerController@sendMessage');
Route::get('message/{id}', 'MessengerController@getMessage')->name('message');
Route::get('/messenger', 'MessengerController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/{user}/edit', 'UserController@edit')->name('edit');

Route::group(['middleware' => ['owner']], function () {

    Route::get('/posts', "PostController@index");
    Route::get('/users', 'UserController@index');
    Route::get('/users/{user}', 'UserController@show');
    Route::post('/users', 'UserController@store');
    Route::patch('/users/{user}', 'UserController@update');
    Route::delete('/users/{user}', 'UserController@destroy');
    Route::post('/posts', "PostController@store");
    Route::get('/posts/create', "PostController@create");
    Route::get('/posts/{post}', "PostController@show");
    Route::patch('/posts/{post}', "PostController@update");
    Route::delete('/posts/{post}', "PostController@destroy");
    Route::get('/posts/{post}/edit', "PostController@edit");


});

