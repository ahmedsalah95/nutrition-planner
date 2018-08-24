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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/settings','SettingController'); // index

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('dashboard.pages.settings');
    });

    Route::resource('/patient','PatientController');
});