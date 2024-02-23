<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/room', function () {
    return view('room');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/signup', function () {
    return view('signup');
});
// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/payment', function(){
    return view('payment');
});

require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/room', function () {
    return view('room');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/payment', function(){
    return view('payment');
});

Route::get('/managerAdd', function(){
    return view('managerAdd');
});
Route::get('/managerDelete', function(){
    return view('managerDelete');
});