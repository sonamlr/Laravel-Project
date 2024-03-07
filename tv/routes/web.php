<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendriveController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function(){
    return view('dashboard.login');
});
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/chart-date', [DashboardController::class, 'chartByDate']);
// Route::get('/chart-pendrive', [DashboardController::class, 'chartByPendrive']);
Route::get('/chart-school', [DashboardController::class, 'chartBySchool']);


// Pendrive Routes
Route::get('/pendrivelist', [PendriveController::class, 'getPendrive']);
Route::get('/create-pendrive', [PendriveController::class, 'addPendrive']);
Route::post('/create-pendrive', [PendriveController::class, 'createPendrive'])->name('create.pendrive');
Route::get('/pendrive/edit/{id}', [PendriveController::class, 'editPendrive'])->name('pendrive.edit');
Route::put('/pendrive/update/{id}', [PendriveController::class, 'updatePendrive'])->name('pendrive.update');
Route::delete('/pendrive/destroy/{id}', [PendriveController::class, 'deletePendrive'])->name('pendrive.destroy');
Route::get('/pendriverecord/{id}', [PendriveController::class, 'pendriveRecord'])->name('pendriverecord');
Route::get('/pendriverecord', [PendriveController::class, 'recordList']);
Route::get('/chart-pendrive', [PendriveController::class, 'pendriveName']);
Route::get('/chart-pendrive/{id}', [PendriveController::class, 'pendriveChart'])->name('chart-pendrive');

