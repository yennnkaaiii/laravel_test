<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentController; 
use App\Http\Controllers\GuardiansController;
use App\Http\Controllers\ClassroomController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/guardians', [GuardiansController::class, 'index'])->name('guardians');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
