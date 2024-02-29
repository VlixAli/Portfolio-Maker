<?php

use App\Http\Controllers\Portfolio\HeroController;
use Illuminate\Support\Facades\Route;

Route::controller(HeroController::class)
    ->name('hero.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/hero', 'create')->name('create');
        Route::post('/hero', 'store')->name('store');
        Route::get('/hero/{title:slug}', 'edit')->name('edit');
    });
