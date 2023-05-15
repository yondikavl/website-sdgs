<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\BerandaController;
use App\Http\Controllers\Client\TujuanController;
use App\Http\Controllers\Client\TargetController;
use App\Http\Controllers\Client\ProgramController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PilarController;
use App\Http\Controllers\Admin\IndikatorController;
use App\Http\Controllers\Admin\SubIndikatorController;
use App\Http\Controllers\Admin\AktivitasController;

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

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // CMS SUPER ADMIN
    Route::middleware([SuperAdmin::class])->name('super.')->prefix('super')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('pilar', PilarController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('subindikator', SubIndikatorController::class);
        Route::resource('aktivitas', AktivitasController::class);
    });

    // CMS ADMIN
    Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('pilar', PilarController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('subindikator', SubIndikatorController::class);
        Route::resource('aktivitas', AktivitasController::class);
    });
});

Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('pilar/{id}', [BerandaController::class, 'show'])->name('detail-pilar');
Route::get('tujuan', [TujuanController::class, 'index'])->name('tujuan');
Route::get('indikator/{id}', [TujuanController::class, 'show'])->name('detail-indikator');
Route::get('target', [TargetController::class, 'index'])->name('target');
Route::get('semua-target', [TargetController::class, 'index2'])->name('semua-target');
Route::get('subindikator/{id}', [TargetController::class, 'show'])->name('detail-subindikator');
Route::get('program', [ProgramController::class, 'index'])->name('program');
Route::get('semua-program', [ProgramController::class, 'index2'])->name('semua-program');
Route::get('aktivitas/{id}', [ProgramController::class, 'show'])->name('detail-aktivitas');
