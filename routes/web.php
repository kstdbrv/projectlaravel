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
Route::get('/', 'ContactController@allData')->name('main');

Route::post('/submit', 'ContactController@submit')->name('data-form');

Route::post('/submit-text', 'TextController@submit_text')->name('data-text');



