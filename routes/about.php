<?php

use App\Http\Controllers\Portfolio\AboutController;
use Illuminate\Support\Facades\Route;

Route::controller(AboutController::class)
    ->name('about.')->group(function () {
        Route::get('/about/{about}', 'edit')->name('edit');
        Route::put('/about/{user:id}', 'update')->name('update');
    });
