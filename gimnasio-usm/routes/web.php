<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AlumnoController;

Route::get('/login', [HomeController::class, 'loginGeneral'])->name('home.login');
Route::get('/', [HomeController::class, 'menuPrincipal'])->name('home.menu');
