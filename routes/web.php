<?php

use App\Http\Controllers\TrackingController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
