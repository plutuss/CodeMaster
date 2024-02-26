<?php

use App\Http\Controllers\HomeController;
use Plutuss\CodeMaster\Routing\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
