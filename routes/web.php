<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;

Route::get('/', [UserController::class,'home'])->name('home');
