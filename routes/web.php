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
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\BookingController;

Route::get('/', [MovieController::class, 'indexWelcome'])->name('welcome');
Route::get('/movie/{movie}', [MovieController::class, 'showMovie'])->name('movie.show');
Route::get('/list-movie', [MovieController::class, 'indexListMovie'])->name('movie.index');


Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AuthController::class, 'adminDashboard'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('movie', MovieController::class);
    Route::resource('cinema', CinemaController::class);
    Route::resource('showtime', ShowtimeController::class);
    Route::get('booking', [BookingController::class, 'index'])->name('booking.index');
});

Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'userDashboard'])->name('dashboard');
    Route::get('/{id}', [UserController::class, 'userShow'])->name('show');
    Route::get('/{id}/edit', [UserController::class, 'userEdit'])->name('edit');
    Route::put('/user/{id}', [UserController::class, 'userUpdate'])->name('update');
    Route::delete('/{id}', [UserController::class, 'userDestroy'])->name('destroy');
});
