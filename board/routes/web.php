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
Route::get('/index', 'BoardController@index');
Route::get('/', 'BoardController@index')->name('index');
Route::get('/register', 'BoardController@register')->name('register');
Route::get('/login', 'BoardController@login')->name('login');
Route::post('/login', 'BoardController@login_P');
Route::get('/write', 'BoardController@write')->name('write');
Route::post('/store', 'BoardController@store')->name('store');
Route::post('/mstore','BoardController@mstore')->name('mstore');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','BoardController@logout')->name('logout');
Route::any('/delete','BoardController@delete')->name('delete');
