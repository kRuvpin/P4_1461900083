<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatController;
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
    return view('home');
});
Route::get('lihat', 'App\Http\Controllers\LihatController@lihatdata');
Route::get('user', 'App\Http\Controllers\LihatController@lihatdata');
Route::get('lihat/export_excel', 'App\Http\Controllers\LihatController@export');
