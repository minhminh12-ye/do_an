<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn()=>view('auth.login'));


// Nạp file router con
require __DIR__.'/admin.php';
require __DIR__.'/student.php';
require __DIR__.'/monitor.php';
require __DIR__.'/auth.php';
