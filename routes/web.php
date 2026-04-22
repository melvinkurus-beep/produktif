<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::redirect('/', '/home');

Route::group([], function() {
    Route::resource('home', HomeController::class);
    Route::resource('dashboard', DashboardController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\Backend\PengalamanKerjaController;

// Route untuk fitur Pengalaman Kerja
Route::resource('pengalaman_kerja', PengalamanKerjaController::class);