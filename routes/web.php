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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Administrator')->prefix('Administrator')->name('Administrator.')->group(function(){
    
   Route::get('/index','AdminUserController@index')->name('index');
   Route::get('/cms','AdminUserController@cms')->name('cms');

});

