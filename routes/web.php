<?php

use App\Http\Controllers\PersonnageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('personnage', PersonnageController::class);
