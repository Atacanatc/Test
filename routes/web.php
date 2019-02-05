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
Route::get('/deneme', 'Homecontroller@get_deneme');
Route::get('/form', 'Homecontroller@get_form');
Route::post('/form', 'Homecontroller@post_form')->name('post_form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
