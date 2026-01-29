<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/monitor', fn()=>view('monitor.dashboard'));


