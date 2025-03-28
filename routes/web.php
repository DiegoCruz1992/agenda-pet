<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AppointmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Sobre
    Route::get('/sobre', [AboutController::class, 'index'])->name('sobre');

    //Contact
    Route::get('/contato', [ContactController::class, 'index'])->name('contato');

    //Agendamentos
    Route::get('/agendamentos', [AppointmentController::class, 'index'])->name('agendamentos');
});

require __DIR__.'/auth.php';
