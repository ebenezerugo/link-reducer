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

Route::get('/', "LinkController@index")->name('index');

Route::get('qrcode', "LinkController@qrcode");

Route::post('store', "LinkController@store")->name('store');

Route::get('edit/{link}', "LinkController@edit")->name('edit');

Route::get('destroy/{link}', "LinkController@destroy")->name('destroy');
