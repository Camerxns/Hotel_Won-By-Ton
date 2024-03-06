<?php

use App\Http\Controllers\adminDashboardAPI;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\managerAddAPI;
use App\Http\Controllers\roomsAPI;
use App\Http\Controllers\users;

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
Route::get('/about1', function () {
    return view('about1');
})->middleware(['auth', 'verified'])->name('about1');
Route::get('/booking', function () {
    return view('booking');
})->middleware(['auth', 'verified'])->name('booking');
Route::get('/room', function () {
    return view('room');
})->middleware(['auth', 'verified'])->name('room');
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
    return view('managerAdd');
})->middleware(['auth', 'verified'])->name('managerAdd');
Route::get('/managerDelete', function () {
    return view('managerDelete');
})->middleware(['auth', 'verified'])->name('managerDelete');
Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/booking', function () {
    return view('booking');
})->middleware(['auth', 'verified'])->name('booking');
Route::get('/room2', function () {
    return view('room2');
})->middleware(['auth', 'verified'])->name('room2');
Route::get('/service', function () {
    return view('service');
})->middleware(['auth', 'verified'])->name('service');
Route::get('/team', function () {
    return view('team');
})->middleware(['auth', 'verified'])->name('team');
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/managerAdd', function () {
    return view('managerAdd');
})->middleware(['auth', 'verified'])->name('managerAdd');
Route::get('/managerDelete', function () {
    return view('managerDelete');
})->middleware(['auth', 'verified'])->name('managerDelete');
Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/payment', function(){
    return view('payment');
});

Route::get('/popup', function () {
    return view('popup');
})->name('popup');

Route::get('/adminDashboard', [adminDashboardAPI::class, 'index'])->name('adminDashboard');

require __DIR__.'/auth.php';
Route::get('/about', function () {
    return view('about');
});

Route::get('/room2', [roomsAPI::class, 'index'])->name('room2');

Route::post('/managerAdd', [managerAddAPI::class, 'store'])->name('addRoom');