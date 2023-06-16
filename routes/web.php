<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\clientCarController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\InsuranceController;
use App\Models\Car;

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
    Route::get('/dashboard', adminDashboardController::class
    )->name('adminDashboard');

    Route::resource('cars', CarController::class);

    // Route::resource('reservations', ReservationController::class);

    Route::resource('insurances', InsuranceController::class);

});


Route::get('/cars', [clientCarController::class, 'index'])->name('cars');




// Route::resource('reservations', ReservationController::class)->except(['create']);

Route::get('/reservations/{car}', [ReservationController::class, 'create'])->name('car.reservation');
Route::post('/reservations/{car}', [ReservationController::class, 'store'])->name('car.reservationStore');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');




Route::get('/', function () {
    $cars = Car::take(6)->where('status', '=', 'available')->get();
    return view('home', compact('cars') );
})->name('home');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('location', function () {
    return view('location');
})->name('location');

Route::get('contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Auth::routes();

