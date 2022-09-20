<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaypalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'loginPage']);

Auth::routes();

// Private routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('create', [PaypalController::class, 'createPaypal'])->name('createPaypal');
    Route::post('process', [PaypalController::class, 'processPaypal'])->name('processPaypal');
    Route::get('processSuccess', [PaypalController::class, 'processSuccess'])->name('processSuccess');
    Route::get('processCancel', [PaypalController::class, 'processCancel'])->name('processCancel');
});
