<?php

use App\Http\Controllers\Portfolio\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::controller(PortfolioController::class)
    ->middleware('auth')->name('portfolio.')->group(function () {
        Route::get('/home', 'index')->name('index');

        include 'hero.php';
        include 'about.php';
        include 'skills.php';
        include 'educations.php';
        include 'experiences.php';
        include 'projects.php';
    });
