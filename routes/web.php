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

Route::namespace('Administrator')->prefix('Administrator')->name('Administrator.')->group(function(){
    Route::get('/welcome','AdminUserController@welcome')->name('welcome'); 
   Route::get('/index','AdminUserController@index')->name('index');
   Route::get('/cms','AdminUserController@cms')->name('cms');
  });

  Route::namespace('Administrator\ModuliSpitali')->prefix('ModuliSpitali')->name('Spitali.')->group(function(){
  Route::get('/spitali', 'SpitaliController@index')->name('spitali');
  Route::get('/alldoctor', 'DoctorController@alldoctor')->name('alldoctor');
  Route::get('/add-doctor-formular', 'DoctorController@addformular')->name('addformular');
  Route::post('/Adddoctor', 'DoctorController@Adddoctor')->name('Adddoctor');
  Route::post('/profile', 'DoctorController@profiledoctor')->name('profiledoctor');
  //Pacient route//
  Route::get('pacient','PacientController@getPacient')->name('getPacient');
});
 

