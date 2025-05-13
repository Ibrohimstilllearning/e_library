<?php

use App\Models\Manajemen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\StoreFrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BookFrontController;
use App\Http\Controllers\SpecialBookController;
use App\Http\Controllers\ContactFrontController;
use App\Http\Controllers\User\UserLoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'userMiddleware'])->group(function () {
    Route::get('/userdashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::middleware(['auth', 'adminMiddleware'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/manajemen', ManajemenController::class);
    Route::get('admin/userlogin', [UserLoginController::class, 'index'])->name('admin.userlogin');
});
Route::get('/baca/{id}', [BacaController::class, 'index'])->name('baca')->middleware('auth');
Route::get('/specialbook', [SpecialBookController::class, 'index'])->name('specialbook.index')->middleware('auth');
Route::get('/contact', [ContactFrontController::class, 'index'])->name('contactfront');
Route::get('/store', [StoreFrontController::class, 'index'])->name('storefront');
Route::get('/books', [BookFrontController::class, 'index'])->name('bookfront');

