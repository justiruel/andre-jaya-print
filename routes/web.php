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
    return redirect('/upload');
    //return view('welcome');
});

Route::get('/signin', 'UsersController@signin');
Route::post('/run_signin', 'UsersController@run_signin');
Route::get('/run_signout', 'UsersController@run_signout');

Route::group(['middleware' => 'authaj'], function(){
    Route::get('/import', 'UsersController@import');
    Route::get('/upload', 'UsersController@upload_form');
    Route::post('/run_upload', 'UsersController@run_upload');
    Route::get('/retrieve_data_karyawan', 'UsersController@retrieve_data_karyawan');
});