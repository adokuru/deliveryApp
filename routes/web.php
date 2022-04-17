<?php

use App\Http\Controllers\TrackingController;
use App\Http\Controllers\TrackingLogsController;
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
Route::middleware(['auth'])->get('/dashboard', [TrackingController::class, "admin_dashboard"])->name('dashboard');
Route::middleware(['auth'])->get('/tracking/create', [TrackingController::class, "create"])->name('create');
Route::middleware(['auth'])->post('/tracking/create', [TrackingController::class, "store"])->name('store');
Route::middleware(['auth'])->get('/tracking/edit/{id}', [TrackingController::class, "edit"])->name('edit');
Route::middleware(['auth'])->put('/tracking/edit', [TrackingController::class, "update"])->name('update');
Route::middleware(['auth'])->get('/tracking/delete/{id}', [TrackingController::class, "delete"])->name('delete');

Route::middleware(['auth'])->get('/trackinglogs', [TrackingLogsController::class, "index"])->name('tracking_logs'); 
Route::middleware(['auth'])->get('/trackinglogs/create', [TrackingLogsController::class, "create"])->name('tracking_logs.create'); 
Route::middleware(['auth'])->post('/trackinglogs', [TrackingLogsController::class, "store"])->name('tracking_logs.store'); 