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
    return view('articleList');
    // return view('welcome');
});

Route::get('/list', 'BoardController@index');

Route::get('/add', 'BoardController@add');
Route::post('/add', 'BoardController@create');

Route::get('/show', 'BoardController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
