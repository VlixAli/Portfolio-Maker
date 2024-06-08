<?php

use App\Http\Controllers\Portfolio\ProjectController;
use Illuminate\Support\Facades\Route;

Route::controller(ProjectController::class)
    ->name('projects.')->prefix('/projects')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/show/{project}', 'show')->name('show');
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{project}', 'edit')->name('edit');
        Route::put('/{project}', 'update')->name('update');
        Route::delete('/index', 'empty')->name('empty');
        Route::delete('/{project}', 'destroy')->name('delete');
    });
