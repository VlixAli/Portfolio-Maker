<?php

use App\Http\Controllers\Portfolio\ExperienceController;
use Illuminate\Support\Facades\Route;

Route::controller(ExperienceController::class)
    ->name('experiences.')->prefix('/experiences')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{experience}', 'edit')->name('edit');
        Route::put('/{experience}', 'update')->name('update');
        Route::delete('/index', 'empty')->name('empty');
        Route::delete('/{experience}', 'destroy')->name('delete');
    });
