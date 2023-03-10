<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// });

Route::get('/', [UserController::class, 'index'])->name('lapmas.index');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('lapmas.dashboard');

Route::middleware(['isMasyarakat'])->group(function () {
    // isi pengaduan laporan 
    Route::get('/pengaduan/{siapa?}', [UserController::class, 'pengaduan'])->name('lapmas.pengaduan');

    // storee 
    Route::post('/store', [UserController::class, 'storePengaduan'])->name('lapmas.store');

    // loguout
    Route::get('/logout', [UserController::class, 'logout'])->name('lapmas.logout');
});

Route::middleware(['guest'])->group(function () {
    // login
    Route::get('/login', [UserController::class, 'formLogin'])->name('lapmas.formLogin');
    Route::post('/login/auth', [UserController::class, 'login'])->name('lapmas.login');
    // register
    Route::get('/register', [UserController::class, 'formRegister'])->name('lapmas.formRegister');
    Route::post('/register/auth', [UserController::class, 'register'])->name('lapmas.register');
});


// admin
Route::prefix('admin')->group(function () {


    Route::middleware(['isAdmin'])->group(function(){
        // dashboard
        Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
        // pengaduan
        Route::resource('pengaduan', PengaduanController::class);
        // petugas
        Route::resource('petugas', PetugasController::class);
        // masyrakat
        Route::resource('masyarakat', MasyarakatController::class);
        // laporan
        Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
        // tanggapan
        Route::post('tanggapan/createOrUpdate', [TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');

        Route::post('getLaporan', [LaporanController::class, 'getLaporan'])->name('laporan.getLaporan');
        Route::get('laporan/cetak/{from}/{to}', [LaporanController::class, 'cetakLaporan'])->name('laporan.cetakLaporan');
    });

    Route::middleware(['isPetugas'])->group(function(){
         // dashboard
         Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
         // pengaduan
        Route::resource('pengaduan', PengaduanController::class);
        // tanggapan
        Route::post('tanggapan/createOrUpdate', [TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');
        // logout
        Route::get('/logout',[adminController::class, 'logout'])->name('admin.logout');
    });

    Route::middleware(['isGuest'])->group(function () {
        Route::get('/',[adminController::class, 'FormLogin'])->name('admin.FormLogin');
        Route::post('/login',[adminController::class, 'login'])->name('admin.login');
    });


   


});
