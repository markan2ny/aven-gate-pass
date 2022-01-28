<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatePassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('dashboard.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/add-new-gatepass', [GatePassController::class, 'createGatePass'])->middleware(['auth'])->name('create-gatepass');
Route::get('/view-all-gatepass', [GatePassController::class, 'viewGatePass'])->middleware(['auth'])->name('view-gatepass');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

require __DIR__.'/auth.php';    
