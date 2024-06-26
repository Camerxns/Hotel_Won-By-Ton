<?php

use App\Http\Controllers\adminDashboardAPI;
use App\Http\Controllers\Signup_API;
use App\Http\Controllers\rooms;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\addRoomAPI;
use App\Http\Controllers\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/submit_signup', [Signup_API::class, 'store']);

Route::resource('login', Login::class);
// Route::delete('/Room/{id}', 'App\Http\Controllers\addRoomAPI@destroy')->name('Room.destroy');

Route::resource('adminDashboard', adminDashboardAPI::class);

Route::get('/admin-dashboard', [adminDashboardAPI::class, 'index'])->name('admin.dashboard');
Route::post('/admin-dashboard/{id}/store', [adminDashboardAPI::class, 'store'])->name('admin.dashboard.store');
Route::delete('/adminDashboard/{id}', [adminDashboardAPI::class, 'destroy'])->name('admin.dashboard.destroy');

Route::resource('reservations', ReservationsController::class);


// Route::delete('/admin-dashboard/{id}', [ReservationsController::class, 'destroy'])->name('admin.dashboard.destroy');

Route::delete('/Room/{id}', 'App\Http\Controllers\managerAddAPI@destroy')->name('Room.destroy');
Route::post('/addRoom', [addRoomAPI::class, 'store'])-> name('addRoom');
Route::delete('/Room/{id}', 'App\Http\Controllers\addRoomAPI@destroy')->name('Room.destroy');
