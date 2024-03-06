<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\StaffController;
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

// Route::middleware(['auth'])->group(function() {
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', [DashboardController::class, 'dashboard_index']);
    Route::resource('patient', PatientController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('prescription', PrescriptionController::class);
    Route::resource('queue', QueueController::class);
// });

Route::get('/login', [UserController::class, 'login']);