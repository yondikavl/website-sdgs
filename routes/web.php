<?php

use App\Http\Middleware\OPD;
use App\Http\Middleware\Admin;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\PilarController;
use App\Http\Controllers\Client\TargetController;
use App\Http\Controllers\Client\TujuanController;
use App\Http\Controllers\Client\BerandaController;
use App\Http\Controllers\Admin\PencapaianController;
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

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // CMS SUPER ADMIN
    Route::middleware([SuperAdmin::class])->name('super.')->prefix('super')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('pilar', PilarController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('subindikator', SubIndikatorController::class);
        Route::resource('pencapaian', PencapaianController::class);
    });

    // CMS ADMIN
    Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('pilar', PilarController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('subindikator', SubIndikatorController::class);
        Route::resource('pencapaian', PencapaianController::class);
    });

    // CMS OPD
    Route::middleware([OPD::class])->name('opd.')->prefix('opd')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('pilar', PilarController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('subindikator', SubIndikatorController::class);
        Route::resource('pencapaian', PencapaianController::class);
    });
});

Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('pilar/{id}', [BerandaController::class, 'show'])->name('detail-pilar');
Route::get('tujuan', [TujuanController::class, 'index'])->name('tujuan');
Route::get('indikator/{id}', [TujuanController::class, 'show'])->name('detail-indikator');
Route::get('target', [TargetController::class, 'index'])->name('target');
Route::get('semua-target', [TargetController::class, 'index2'])->name('semua-target');
Route::get('subindikator/{id}', [TargetController::class, 'show'])->name('detail-subindikator');
Route::get('pencapaian/{id}', [ProgramController::class, 'show'])->name('detail-pencapaian');

Route::get('/kontak', function () {
    return view('client.kontak');
})->name('kontak');

// ajax
// get all indikator
Route::get('get-indikator', [IndikatorController::class, 'getAllIndikator'])->name('get-indikator');
// get all subindikator
Route::get('get-subindikator/{id}', [SubIndikatorController::class, 'getAllSubIndikator'])->name('get-subindikator');
