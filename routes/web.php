<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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


Auth::routes();

Route::match(['get', 'post'],'/search-date', '\App\Http\Controllers\BlogController@searchDate')->name('search-date');

Route::resource('blog', \App\Http\Controllers\BlogController::class);

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




