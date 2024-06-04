<?php

use App\Http\Controllers\Portfolio\HeroController;
use Illuminate\Support\Facades\Route;

Route::controller(HeroController::class)
    ->name('hero.')->prefix('/hero')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{title:slug}', 'edit')->name('edit');
        Route::post('/{title:slug}', 'update')->name('update');
        Route::delete('/index', 'empty')->name('empty');
        Route::delete('/{title:slug}', 'destroy')->name('delete');
    });
