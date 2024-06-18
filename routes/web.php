<?php

use App\Http\Middleware\OPD;
use App\Http\Middleware\Admin;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PilarController;
use App\Http\Controllers\Admin\PencapaianController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TujuanController;
use App\Http\Controllers\Admin\IndikatorController;
use App\Http\Controllers\Client\BerandaController;
use App\Http\Controllers\Client\DashboardClientController;
use App\Http\Controllers\Client\TargetController;
use App\Http\Controllers\Client\TujuansController;

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
        Route::post('/pencapaian/import', [PencapaianController::class, 'import'])->name('pencapaian.import');
        Route::resource('user', UserController::class);
        Route::get('/get-indikator/{roles_id}', [UserController::class, 'getIndikator'])->name('get-indikator');
        Route::resource('pilar', PilarController::class);
        Route::resource('tujuan', TujuanController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('pencapaian', PencapaianController::class);
        Route::resource('kecamatan', KecamatanController::class);
    });

    // CMS ADMIN
    Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('pilar', PilarController::class);
        Route::resource('tujuan', TujuanController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('pencapaian', PencapaianController::class);
        Route::post('/pencapaian/import', [PencapaianController::class, 'import'])->name('pencapaian.import');
    });

    // CMS OPD
    Route::middleware([OPD::class])->name('opd.')->prefix('opd')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('pilar', PilarController::class);
        Route::resource('tujuan', TujuanController::class);
        Route::resource('indikator', IndikatorController::class);
        Route::resource('pencapaian', PencapaianController::class);
        Route::post('/pencapaian/import', [PencapaianController::class, 'import'])->name('pencapaian.import');
    });
});

Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('dashboard-client', [DashboardClientController::class, 'index'])->name('dashboard-client');
Route::get('pilar/{id}', [BerandaController::class, 'show'])->name('detail-pilar');
Route::get('tujuan', [TujuansController::class, 'index'])->name('tujuan');
Route::get('tujuan/{id}', [TujuansController::class, 'index'])->name('tujuan');
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
Route::get('get-indikator/{id}', [IndikatorController::class, 'getAllIndikator'])->name('get-indikator');
Route::get('get-tujuan', [TujuanController::class, 'getAllTujuan'])->name('get-tujuan');
Route::get('admin/get-indikator/{roles_id}', [UserController::class, 'getIndikator'])->name('admin.get-indikator');