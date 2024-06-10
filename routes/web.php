<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionHeaderController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\TransactionHeaderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [UserController::class, 'login_index'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function() {
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', [DashboardController::class, 'dashboard_index'])->name('dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [UserController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [UserController::class, 'profile_edit'])->name('profile_edit');
    Route::get('/queue/current', [QueueController::class, 'current'])->name('queue.current');
    Route::post('/queue/current', [QueueController::class, 'finish_current'])->name('queue.current');
    Route::resource('patient', PatientController::class);
    Route::resource('medicine', MedicineController::class);
    Route::resource('prescription', PrescriptionHeaderController::class)->names('prescription_header');
    Route::resource('transaction', TransactionHeaderController::class)->names('transaction_header');
    Route::resource('queue', QueueController::class);

    /* Administrator routes */
    Route::middleware(['admin'])->group(function() {
        Route::get('/register', [UserController::class, 'register_index'])->name('register');
        Route::post('/register', [UserController::class, 'register'])->name('register');
    });
});
