<?php

use App\Http\Controllers\Backend\AdminController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[UserController::class,'home'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', [AdminController::class,'adminDashboard'])->name('adminDashboard');
Route::get('/admin_home', [AdminController::class,'adminHome'])->name('adminHome');
Route::get('/admin_register', [AdminController::class,'adminRegister'])->name('adminRegister');

require __DIR__.'/auth.php';
