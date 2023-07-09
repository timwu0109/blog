<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
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
    return view('welcome');
});


Route::middleware('web')->group(function()
{
    Route::resource('/user' , UserController::class);

    Route::get('logout'  , [LogoutController::class , 'logout'])->name('logout');
});

Route::get('login' , [LoginController::class , 'showLoginForm'])->name('login');
Route::post('login' , [LoginController::class , 'login'])->name('login');

Route::resource('blog', BlogController::class);