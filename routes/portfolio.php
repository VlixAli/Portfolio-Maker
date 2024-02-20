<?php

use App\Http\Controllers\Portfolio\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::controller(PortfolioController::class)
    ->middleware('auth')->group(function () {
        Route::get('/home', 'index');
    });
