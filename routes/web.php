<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\clientCarController;

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


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.adminLogin');
    });
    Route::get('/dashboard', function () {
        return view('admin.adminDashboard');
    })->name('adminDashboard');

    Route::resource('cars', CarController::class);
});


Route::get('/cars', [clientCarController::class, 'index'])->name('cars');




Route::resource('reservations', ReservationController::class);






Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/test', function () {
    return view('test');
})->name('test');

Auth::routes();

