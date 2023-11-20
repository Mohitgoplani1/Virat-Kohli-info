<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::view('/about', 'about')->name('about');
Route::view("/history",'history')->name('history');
Route::view("/awards",'awards')->name('awards');
Route::view("/contact",'contact')->name('contact');
