<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WineController;
use App\Http\Controllers\CategorysController;

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
    return view('welcome');
})->name('login');

Route::resource('wines', WineController::class)->middleware("auth");
Route::resource('categorys', CategorysController::class)->middleware("auth");
//Route::resource('users',UsersController::class)->middleware("auth");

Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name("login");
Route::get('login/google/callback',[App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);
Route::get('logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name("logout");