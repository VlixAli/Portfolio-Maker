<?php

use App\Http\Controllers\Portfolio\SkillController;
use Illuminate\Support\Facades\Route;

Route::controller(SkillController::class)
    ->name('skills.')->prefix('/skills')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{skill}', 'edit')->name('edit');
        Route::put('/{skill}', 'update')->name('update');
        Route::delete('/index', 'empty')->name('empty');
        Route::delete('/{skill}', 'destroy')->name('delete');
    });
