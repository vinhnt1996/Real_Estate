<?php

use App\Http\Controllers\AuthController;
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

Route::group(['prefix' =>'admin'], function () {
    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name('auth.login');
    Route::get('/forgot', function () {
        return view('admin.auth.forgot');
    })->name('admin.forgot');
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::post("/checkLogin", [AuthController::class, 'login'])->name('check.login');
    Route::get('/logout', [AuthController::class, "logout"])->name('logout');
    //user
    Route::get('user/all', function () {
        return view("admin.users.index");
    })->name('user.all');
    Route::get('user/add', function () {
        return view('admin.users.add');
    })->name('user.add');
    //categories
    Route::get('categories', function() {
        return view('admin.categories.index');
    })->name('category.all');
    Route::get('categories/add', function() {
        return view('admin.categories.add');
    })->name('category.add');
});
