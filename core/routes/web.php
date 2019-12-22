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

Route::get('/', 'StateController@index');
Route::get('/getDist/{id}', 'StateController@getDist')->name('getDist');
Route::get('/getTha/{id}', 'StateController@getTha')->name('getTha');
Route::post('/addDisease', 'PatientController@add')->name('addDisease');
