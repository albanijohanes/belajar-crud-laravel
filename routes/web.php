<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
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

// Landing page, login and register
Route::group([], function(){
    Route::get('/', [LoginController::class, 'landing'])->name('landing');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
});

Route::middleware(['auth'], function(){
    Route::get('/dashboard', [MahasiswaController::class, 'index'])->name('main.index');
    Route::get('/dashboard/create', [MahasiswaController::class, 'create'])->name('main.create');
    Route::post('/dashboard/store', [MahasiswaController::class, 'store'])->name('main.store');
    Route::get('/dashboard/edit/{$id}', [MahasiswaController::class, 'edit'] )->name('main.edit');
    Route::put('/dashboard/update/{$id}', [MahasiswaController::class, 'update'] )->name('main.update');
    Route::delete('/dashboard/delete/{$id}', [MahasiswaController::class, 'destroy'] )->name('main.destroy');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
