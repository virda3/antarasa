<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/resep', [ResepController::class, 'index'])->middleware('auth');
Route::get('/kursus', function () {
    return view('kursus');
});
Route::get('/kontak', function () {
    return view('kontak');
});