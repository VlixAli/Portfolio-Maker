<?php

use App\Http\Controllers\Authentication\RegisterController;
use Illuminate\Support\Facades\Route;

Route::controller( RegisterController::class)->group(function (){
    Route::get('register', 'create');
    Route::post('register' , 'store');
});
