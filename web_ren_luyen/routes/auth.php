<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/login', fn()=>view('auth.login'))->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.process');
