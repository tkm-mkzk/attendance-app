<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// ログイン機能
Route::get('/login', function () {
  return view('login');
});
Route::get('/register', function () {
  return view('register');
})->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/', function () {
  return view('attendance');
})->middleware('auth')->name('attendance');
