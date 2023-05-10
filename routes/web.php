<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\TargetController;
use App\Http\Controllers\Client\TujuanController;
use App\Http\Controllers\Client\ProgramController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndikatorController;
use App\Http\Controllers\Admin\SubIndikatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // CMS SUPER ADMIN
    Route::middleware([SuperAdmin::class])->name('super.')->prefix('super')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('subindikator', SubIndikatorController::class);
    });

    // CMS ADMIN
    Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('subindikator', SubIndikatorController::class);
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('tujuan', [TujuanController::class, 'index'])->name('tujuan');
Route::get('indikator/{id}', [TujuanController::class, 'show'])->name('detail-indikator');
Route::get('target', [TargetController::class, 'index'])->name('target');
Route::get('program', [ProgramController::class, 'index'])->name('program');
