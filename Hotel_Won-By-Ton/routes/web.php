<?php

use App\Http\Controllers\adminDashboardAPI;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\managerAddAPI;
use App\Http\Controllers\roomsAPI;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReceiptController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about1');
})->middleware(['auth', 'verified'])->name('about1');


Route::get('/booking', [PaymentController::class,'showBookingForm'])->middleware(['auth', 'verified'])->name('booking');


Route::get('/service', function () {
    return view('service');
})->middleware(['auth', 'verified'])->name('service');

Route::get('/team', function () {
    return view('team');
})->middleware(['auth', 'verified'])->name('team');

Route::get('/testimonial', function () {
    return view('testimonial');
})->middleware(['auth', 'verified'])->name('testimonial');

Route::get('/managerAdd', function () {
    if(Auth::user()->AccessLevel === 'User' || 'Manager' || 'Admin'){
        return view('managerAdd');
    }
})->middleware(['auth', 'verified'])->name('managerAdd');

Route::get('/managerDelete', function () {
    if(Auth::user()->AccessLevel === 'User' || 'Manager' || 'Admin'){
        return view('managerDelete');
    }
})->middleware(['auth', 'verified'])->name('managerDelete');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/reservations', [ReservationsController::class, 'show'])->name('reservations.show');






Route::get('/popup', function () {
    return view('popup');
})->name('popup');

Route::get('/adminDashboard', [adminDashboardAPI::class, 'index'])->name('adminDashboard');
// mental note uncomment out or ill get simted by someone who has the sandwich of life

// Route::get('/adminDashboard', [adminDashboardAPI::class, 'index'])->name('adminDashboard');

Route::get('/rooms', [roomsAPI::class, 'index'])->name('room2');

Route::post('/managerAdd', [managerAddAPI::class, 'store'])->name('addRoom');
Route::post('/reservation', [ReservationsController::class, 'store'])->name('reservation');
// mental note uncomment out or ill get simted by someone who has the sandwich of life

Route::get('/receipt', [ReceiptController::class, 'show'])->name('receipt');
// Route::get('/booking', [Payment::class, 'showPaymentForm'])->name('payment.show');


require __DIR__.'/auth.php';