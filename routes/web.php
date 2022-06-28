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

Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/contacto', 'App\Http\Controllers\PagesController@contacto')->name('contacto');
Route::get('/servicios', 'App\Http\Controllers\PagesController@servicios')->name('servicios');
Route::get('/{tarta}', 'App\Http\Controllers\PagesController@tarta')->name('tarta');
Route::get('/tartas', 'App\Http\Controllers\PagesController@tartas')->name('tartas');

