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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/list', 'BoardController@index')->name('list');

    Route::get('/add', 'BoardController@add');
    Route::post('/add', 'BoardController@create');

    Route::get('/show/{id}', 'BoardController@show');

});
