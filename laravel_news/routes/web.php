<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;



Auth::routes(['register'=>false]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::resource('news', AdminController::class);

Route::get('/', function () {
    return view('welcome');
});
