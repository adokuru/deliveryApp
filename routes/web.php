<?php

use App\Http\Controllers\TrackingController;
use App\Models\TrackingLogs;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/logistics  ', function () {
    return view('logistics');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tracking', [TrackingController::class, "index"])->name('tracking');
Route::post('/tracking', [TrackingController::class, "show"])->name('tracker');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [TrackingController::class, "admin_dashboard"])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/tracking/create', [TrackingController::class, "create"])->name('create');
Route::middleware(['auth:sanctum', 'verified'])->post('/tracking/create', [TrackingController::class, "store"])->name('store');
Route::middleware(['auth:sanctum', 'verified'])->get('/tracking/edit/{id}', [TrackingController::class, "edit"])->name('edit');
Route::middleware(['auth:sanctum', 'verified'])->put('/tracking', [TrackingController::class, "update"])->name('update');
Route::middleware(['auth:sanctum', 'verified'])->get('/tracking/delete/{id}', [TrackingController::class, "admin_dashboard"])->name('delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/trackinglogs', [TrackingLogs::class, "index"])->name('tracking_logs'); 