<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::redirect('/', '/home');

Route::resource('home', HomeController::class);
Route::group(['namespace' => 'frontend'], function() {
    Route::resource('dashboard', DashboardController::class);
});