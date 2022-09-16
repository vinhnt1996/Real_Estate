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

Route::group(['prefix' =>'admin'], function() {
    Route::get('/login', function() {
        return view('admin.auth.login');
    });
    Route::get('/forgot', function() {
        return view('admin.auth.forgot');
    })->name('admin.forgot');
    Route::get('/', function() {
        return view('admin.index');
    });
});
