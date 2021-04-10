<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AdminController::class, 'showLoginForm']);
Route::post('login', [AdminController::class, 'login'])->name('admin.login');
Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('home', [AdminController::class, 'dashboard'])->name('admin.home');

