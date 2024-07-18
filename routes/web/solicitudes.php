<?php

use App\Http\Controllers\Solicitudes\SolicitudesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Solicitudes\SolicitudesControllerController;
use Illuminate\Support\Facades\Auth;
use App\Models\Solicitudes\DatosPersonales;
use App\Models\Solicitudes\DatosTrabajo;
use App\Models\Solicitudes\DatosEstudios;

Route::middleware('auth')->group(function () {
    Route::get('/solicitudes/{programa}', function () {
        $programa = request()->route('programa');
        if (is_null(DatosPersonales::find(Auth::id()))) {
            return redirect()->route('solicitudes.personales', ['programa' => $programa]);
        }
        if (is_null(DatosEstudios::find(Auth::id()))) {
            return redirect()->route('solicitudes.estudios', ['programa' => $programa]);
        }
        if (is_null(DatosTrabajo::find(Auth::id()))) {
            return redirect()->route('solicitudes.trabajo', ['programa' => $programa]);
        }
    })->name('solicitudes.index');
    //Personales
    Route::get('/{programa}/personales', [SolicitudesController::class, 'personales'])->name('solicitudes.personales');
    Route::post('/{programa}/personales', [SolicitudesController::class, 'personalesStore'])->name('solicitudes.personales.store');
    Route::post('/{programa}/personales/update', [SolicitudesController::class, 'personalesUpdate'])->name('solicitudes.personales.update');
    //Estudios
    Route::get('/{programa}/estudios', [SolicitudesController::class, 'estudios'])->name('solicitudes.estudios');
    //Trabajo
    Route::get('/{programa}/trabajo', [SolicitudesController::class, 'trabajo'])->name('solicitudes.trabajo');
});
