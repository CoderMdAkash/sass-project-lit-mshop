<?php

use App\Http\Controllers\superAdmin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superAdmin\MasterController;
use App\Http\Controllers\superAdmin\DashboardController;

Route::get('/login', [AuthController::class, 'login'])->name('superadmin.login');
Route::post('/loginAction', [AuthController::class, 'loginAction'])->name('superadmin.login.post');

Route::group(['middleware' => 'superadmin'], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('superadmin.logout');

    Route::get('/', [MasterController::class, 'index'])->name('superadmin.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('superadmin.dashboard');

});
