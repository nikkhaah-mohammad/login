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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/payment', function () {
    return view('pay');
});


Auth::routes();
Route::get('profile', 'HomeController@profile');
Route::post('profile', 'HomeController@update_avatar');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@profileUpdate')->name('profileupdate');
Route::post('/home','HomeController@profileUpdate')->name('profileupdate');