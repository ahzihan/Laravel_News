<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register'=>false]);

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('news', AdminController::class);

Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/category/{id}', [FrontController::class,'category'])->name('category');
Route::get('/details/{id}', [FrontController::class,'details'])->name('details');
