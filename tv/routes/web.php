<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('dashboard.dashboard');
});

Route::get('/pendrivelist', [DashboardController::class, 'pendriveList']);
Route::get('/pendriveadd', [DashboardController::class, 'pendriveAdd']);
Route::post('/store-pendrive', [DashboardController::class, 'storePendrive'])->name('store.pendrive');
