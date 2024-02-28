<?php

use App\Http\Controllers\Portfolio\HeroController;
use Illuminate\Support\Facades\Route;

Route::controller(HeroController::class)
    ->name('hero.')->group(function () {
        Route::get('/hero', 'create')->name('create');
    });
