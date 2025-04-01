<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AppointmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nossa-historia', [App\Http\Controllers\HomeController::class, 'historia'])->name('historia');
Route::get('/nosso-contato', [App\Http\Controllers\HomeController::class, 'contato'])->name('contato');
Route::get('/todos-agendamentos', [App\Http\Controllers\HomeController::class, 'agendamento'])->name('agendamento');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard.home');

    //Nossa história
    Route::get('/historia', [HistoryController::class, 'index'])->name('dashboard.history');

    //Contact
    Route::get('/contato', [ContactController::class, 'index'])->name('dashboard.contato');

    //Agendamentos
    Route::get('/agendamentos', [AppointmentController::class, 'index'])->name('dashboard.agendamentos');
});

require __DIR__.'/auth.php';
