<?php

use App\Http\Controllers\Portfolio\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(ServiceController::class)
    ->name('services.')->prefix('/services')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{service}', 'edit')->name('edit');
        Route::put('/{service}', 'update')->name('update');
        Route::delete('/index', 'empty')->name('empty');
        Route::delete('/{service}', 'destroy')->name('delete');
    });
