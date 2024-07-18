<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctorado\DoctoradoController;

Route::get('/doctorado', [DoctoradoController::class, 'index'])->name('doctorado.index');