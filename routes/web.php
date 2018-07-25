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
    return view('dashboard');
})->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/charts', 'ChartsController@index')->name('charts');
Route::get('/tables', 'TablesController@index')->name('tables');
Route::get('/navbar', 'NavbarController@index')->name('navbar');
Route::get('/cards', 'CardsController@index')->name('cards');
Route::get('/map', 'MapController@index')->name('map');
