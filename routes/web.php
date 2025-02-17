<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;

Route::get('/', [MovieController::class, 'indexWelcome'])->name('welcome');


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AuthController::class, 'adminDashboard'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('movie', MovieController::class);
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('user/dashboard', [AuthController::class, 'userDashboard'])->name('user.dashboard');
});
