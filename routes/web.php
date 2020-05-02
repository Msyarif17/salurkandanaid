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

Route::get('/','blog@index');
Route::get('/visi-misi','blog@vismis');
Route::get('/tentang-kami','blog@tkami');
Route::get('/login','blog@login');
Route::get('/penggalangan','blog@penggalangan');
Route::get('/penggalangan/donasi','blog@alur');
Route::get('/kalkulator','blog@forbid');

