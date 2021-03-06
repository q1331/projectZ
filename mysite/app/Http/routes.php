<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'Front@index');
Route::get('/search', 'Front@search');
Route::get('/item', 'Front@item');
Route::get('/user', 'Front@user');
Route::get('/test', 'Front@test');

Route::group(['middleware' => ['web']], function () {
    Route::get('/dashboard', 'Front@dashboard');
// Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
// Other routes
    Route::get('/listings', 'Front@listings');
    Route::get('/orders', 'Front@orders');
    Route::get('/myapplication', 'Front@myapplication');
    Route::post('/upload', 'Front@upload');
});