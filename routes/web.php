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



Route::get('/', 'dashboardController@index');
Route::get('/canberra', 'CanberraController@index');
Route::get('/sydney', 'SydneyController@index');
Route::get('/brisbane', 'BrisbaneController@index');
Route::get('/melbourne', 'MelbourneController@index');
Route::get('/perth', 'PerthController@index');
