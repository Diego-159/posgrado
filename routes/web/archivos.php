<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Archivos\ArchivosController;

Route::middleware('auth')->group(function () {
    Route::get('/archivos', [ArchivosController::class, 'index'])->name('archivos.index');
    Route::get('/archivos/solicitud', [ArchivosController::class, 'solicitud'])->name('archivos.solicitud');
    Route::post('/archivos/store', [ArchivosController::class, 'store'])->name('archivos.store');
});