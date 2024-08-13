<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllControlController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuahCMSController;
use App\Http\Controllers\ControlcmsController;
use App\Http\Controllers\DokumentasiRekapController;
use App\Http\Controllers\FormTanamanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerekapController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SayurCMSController;
use App\Http\Controllers\SeedlingController;
use App\Http\Controllers\SpecificControlController;
use App\Http\Controllers\TanamanAdminController;
use App\Http\Controllers\TanamanCMSController;

// Home page
Route::get('/', [HomeController::class, 'indexcms'])->name('indexcms.index');


// Seedlings routes
Route::resource('seedlings', SeedlingController::class);
Route::get('/seedlings', [SeedlingController::class, 'index'])->name('seedlings.index');

//tanaman admin
Route::get('/tanamanadmin', [TanamanAdminController::class, 'index'])->name('tanamanadmin.index');

//buah
Route::get('/buahcms', [BuahCMSController::class, 'index'])->name('buahcms.index');

//sayur
Route::get('/sayurcms', [SayurCMSController::class, 'index'])->name('sayurcms.index');

//tanaman cms
Route::get('/tanamancms', [TanamanCMSController::class, 'index'])->name('tanamancms.index');

//allcontrol
Route::get('/allcontrol', [AllControlController::class, 'index'])->name('allcontrol.index');
Route::get('/controlcms', [ControlcmsController::class, 'index'])->name('controlcms.index');

//spesifikcontrol
Route::get('/specificcontrol', [SpecificControlController::class, 'index'])->name('specificcontrol.index');

Route::get('/specificcontrol2', [SpecificControlController::class, 'index'])->name('specificcontrol2.index');

//formtanaman
Route::get('/formtanaman', [FormTanamanController::class, 'index'])->name('formtanaman.index');

// Custom routes for seedlings
Route::get('/seedlings/rekap', [SeedlingController::class, 'rekap'])->name('seedlings.rekap');
Route::post('/seedlings/{id}/complete', [SeedlingController::class, 'complete'])->name('seedlings.complete');

// Photos routes
Route::get('photos/upload/{seedlingId}', [PhotoController::class, 'upload'])->name('photos.upload');
Route::post('photos/store', [PhotoController::class, 'store'])->name('photos.store');
Route::delete('/photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');
Route::get('/photos/list/{seedlingId}', [PhotoController::class, 'list'])->name('photos.list');

// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//merekap frontend
Route::get('/merekap', [MerekapController::class, 'index'])->name('merekap.index');

//dokum rekap
Route::get('/dokumentasi-rekap', [DokumentasiRekapController::class, 'index'])->name('dokumentasirekap.index');

// Protected routes for authenticated users
Route::middleware('auth')->group(function () {
    // Akses ke rute ini hanya untuk pengguna yang sudah login
    // Tidak perlu mendeklarasikan ulang rute index
});
