<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/room-info', 'RoomInfoController@index');
// Route::get('/create-room-info', 'RoomInfoController@create');
// Route::get('/{id}/edit-room-info', 'RoomInfoController@edit');

Route::resource('room-infos','RoomInfoController');
Route::resource('room-utilities','RoomUtilityController');
//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/room-utility', 'RoomUtilityController@index');
Route::get('/create-room-utility', 'RoomUtilityController@create');
Route::get('/{id}/edit-room-utility', 'RoomUtilityController@create');