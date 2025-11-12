<?php

use Illuminate\Support\Facades\Route;

/*-------------------- Routes web sécurisées-----------------*/
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NewsletterController;

Route::middleware(['auth.admin'])->prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::get('/services', [ServiceController::class, 'index'])->name('admin.services');
    Route::get('/designs', [DesignController::class, 'index'])->name('admin.designs');
});

/*---------------------------------------------------------------*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/client-form', [ClientController::class, 'store'])->name('clients.store');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');



Route::middleware(['auth.admin'])->group(function () {
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('designs', DesignController::class);
});
Route::post('/designs/upload', [DesignController::class, 'upload'])->middleware('auth.admin');
Route::apiResource('orders', OrderController::class);