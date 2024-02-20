<?php

use App\Http\Controllers\Authentication\LoginController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->name('login.')->group(function () {
    Route::get('login', 'create')->name('create');
    Route::post('login', 'store')->name('store');

    Route::post('logout', 'destroy')->middleware('auth')->name('destroy');
});
