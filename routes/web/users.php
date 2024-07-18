<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::post('users/register', [UserController::class, 'store'])->name('users.register');
Route::post('users/login', [UserController::class, 'verify'])->name('users.login');
Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->where('id', '[0-9]+');
Route::get('users/exit', [UserController::class, 'exit'])->name('user.exit');
Route::post('users/update/{id}', [UserController::class, 'update'])->name('user.update')->where('id', '[0-9]+');