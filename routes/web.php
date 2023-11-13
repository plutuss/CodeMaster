<?php

use App\Http\Controllers\HomeController;
use Plutuss\SauceCore\Routing\Route;

/**
 *  
 * 
 */

Route::get('/', [HomeController::class, 'index'])->name('home');
