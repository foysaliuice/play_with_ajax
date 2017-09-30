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

Route::get('/', 'StudentController@index');
Route::get('/result', 'StudentController@result')->name('result');
Route::get('/emp', 'StudentController@empForm')->name('emp');
Route::get('/addEmp', 'StudentController@store')->name('addEmp');
