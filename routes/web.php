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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete');
