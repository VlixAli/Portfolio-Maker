<?php

use App\Http\Controllers\Portfolio\AboutController;
use Illuminate\Support\Facades\Route;

Route::controller(AboutController::class)
    ->name('about.')->prefix('/about')->group(function () {
        Route::get('/{about}', 'edit')->name('edit');
        Route::put('/{user:id}', 'update')->name('update');
    });
