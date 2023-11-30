<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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
    if(!Auth::user()) {
        return view('auth.login');
    } else{
        return view('dashboard.home');
    }
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    });
    Route::get('/dashboard', function () {
        return view('layouts.app');
    });
});

Route::group(['middleware' => 'auth'], function(){
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
});

// Route::get('/login', function () {
//     return view('auth.login');
// })->name("login");

// Route::get('/register', function () {
//     return view('auth.register');
// })->name("register");
