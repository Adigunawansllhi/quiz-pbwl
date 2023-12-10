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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user_create');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user_store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user_edit');
Route::put('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user_update');
Route::delete('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user_delete');


Route::get('/golongan', [App\Http\Controllers\GolonganController::class, 'index'])->name('gol_view');
Route::get('/create', [App\Http\Controllers\GolonganController::class, 'create'])->name('gol_create');
Route::post('/store', [App\Http\Controllers\GolonganController::class, 'store'])->name('gol_store');
Route::get('/edit/{id}', [App\Http\Controllers\GolonganController::class, 'edit'])->name('gol_edit');
Route::put('/update/{id}', [App\Http\Controllers\GolonganController::class, 'update'])->name('gol_update');
Route::delete('/delete/{id}', [App\Http\Controllers\GolonganController::class, 'destroy'])->name('gol_delete');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create'])->name('pel_create');
Route::post('pelanggan/store', [App\Http\Controllers\PelangganController::class, 'store'])->name('pel_store');
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelangganController::class, 'edit'])->name('pel_edit');
Route::put('/pelanggan/update/{id}', [App\Http\Controllers\PelangganController::class, 'update'])->name('pel_update');
Route::delete('/pelanggan/delete/{id}', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('pel_delete');
