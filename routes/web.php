<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\clientCarController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\addNewAdminController;
use App\Models\User;
use App\Models\Car;
use App\Models\Reservation;

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
    Route::get(
        '/dashboard',
        adminDashboardController::class
    )->name('adminDashboard');

    Route::resource('cars', CarController::class);

    // Route::resource('reservations', ReservationController::class);

    Route::resource('insurances', InsuranceController::class);

    Route::get('/users', function () {

        $admins = User::where('role', 'admin')->get();
        $clients = User::where('role', 'client')->get();

        return view('admin.users', compact('admins', 'clients'));
    })->name('users');

    Route::get('/updatePayment/{reservation}', [ReservationController::class, 'editPayment'])->name('editPayment');
    Route::put('/updatePayment/{reservation}', [ReservationController::class, 'updatePayment'])->name('updatePayment');

    Route::get('/updateReservation/{reservation}', [ReservationController::class, 'editStatus'])->name('editStatus');
    Route::put('/updateReservation/{reservation}', [ReservationController::class, 'updateStatus'])->name('updateStatus');

    Route::get('/addAdmin', [usersController::class, 'create'])->name('addAdmin');
    Route::post('/addAdmin', [addNewAdminController::class, 'register'])->name('addNewAdmin');

    Route::delete('/deleteUser/{user}', [usersController::class, 'destroy'])->name('deleteUser');
});


Route::get('/cars', [clientCarController::class, 'index'])->name('cars');




// Route::resource('reservations', ReservationController::class)->except(['create']);

Route::get('/reservations/{car}', [ReservationController::class, 'create'])->name('car.reservation');
Route::post('/reservations/{car}', [ReservationController::class, 'store'])->name('car.reservationStore');

Route::get('/reservation', function () {

    $reservations = Reservation::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
    return view('clientReservation', compact('reservations'));

})->name('clientReservation');


Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

route::get('invoice' , function () {
    return view('invoice');
})->name('invoice');




Route::get('/', function () {
    $cars = Car::take(6)->where('status', '=', 'available')->get();
    return view('home', compact('cars'));
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
