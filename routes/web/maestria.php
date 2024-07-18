<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maestria\MaestriaController;

Route::get('/maestria', [MaestriaController::class, 'index'])->name('maestria.index');