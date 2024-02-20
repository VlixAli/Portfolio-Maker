<?php

use App\Http\Controllers\Authentication\RegisterController;
use Illuminate\Support\Facades\Route;

Route::controller( RegisterController::class)->name('register.')->group(function (){
    Route::get('register', 'create')->name('create');
    Route::post('register' , 'store')->name('store');
});
