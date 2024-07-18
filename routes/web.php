<?php

use Illuminate\Support\Facades\Route;
use App\Models\Paises\Paises;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require_once __DIR__ . '/web/users.php';
require_once __DIR__ . '/web/maestria.php';
require_once __DIR__ . '/web/doctorado.php';
require_once __DIR__ . '/web/solicitudes.php';


Route::get('/login', function () {
    return view('welcome', ['accion' => 'login', 'paises' => null]);
})->name('login');

Route::get('/register', function () {
    return view('welcome', ['accion' => 'register', 'paises' => Paises::all()]);
})->name('register');

Route::middleware('auth')->group(function () {
    Route::view('/', 'home')->name('home');
});

