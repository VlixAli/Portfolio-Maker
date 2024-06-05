<?php

use App\Http\Controllers\Portfolio\EducationController;
use Illuminate\Support\Facades\Route;

Route::controller(EducationController::class)
    ->name('educations.')->prefix('/educations')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{education}', 'edit')->name('edit');
        Route::put('/{education}', 'update')->name('update');
        Route::delete('/index', 'empty')->name('empty');
        Route::delete('/{education}', 'destroy')->name('delete');
    });
