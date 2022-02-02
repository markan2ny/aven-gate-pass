<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\GatePassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/site', [App\Http\Controllers\SiteController::class, 'viewSites']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/test', [TestController::class, 'index']);
Route::get('/ex', [TestController::class, 'create']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
// Route::get('/add-new-gatepass', [GatePassController::class, 'createGatePass'])->middleware(['auth'])->name('create-gatepass');
// Route::get('/view-all-gatepass', [GatePassController::class, 'viewGatePass'])->middleware(['auth'])->name('view-gatepass');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);


// Route::middleware(['auth'])->group(function() {

//     Route::get('/test', [TestController::class, 'index']);
    

// });

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/add-new-gatepass', [GatePassController::class, 'createGatePass'])->name('view-create');
    Route::post('/add-new-gatepass', [GatePassController::class, 'store'])->name('create-gatepass');
    Route::get('/view-all-gatepass', [GatePassController::class, 'viewGatePass'])->name('view-gatepass');
    // sites
    Route::get('/view-site', [SiteController::class, 'viewSites'])->name('view-site');
    Route::get('/view-site/{id}', [SiteController::class, 'profileSite'])->name('profileSite');
    Route::get('/add-new-site', [SiteController::class, 'index'])->name('view-create-site');
    Route::post('/add-new-site', [SiteController::class, 'store'])->name('create-site');

    //Accounts (override)
    Route::get('/create-account', [AccountController::class, 'create'])->name('viewCreateAccount');
    Route::post('/create-account', [AccountController::class, 'store'])->name('createAccount');
});

require __DIR__.'/auth.php';    
