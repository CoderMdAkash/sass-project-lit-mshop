<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superAdmin\MasterController;
use App\Http\Controllers\superAdmin\DashboardController;

Route::get('/', [MasterController::class, 'index'])->name('superadmin.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('superadmin.dashboard');