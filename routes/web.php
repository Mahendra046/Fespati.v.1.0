<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\DivisiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Depan\HomeController;
use App\Http\Controllers\Depan\BeritawebController;
use App\Http\Controllers\Depan\EventwebController;
use App\Http\Controllers\Depan\Tentang\SejarahwebController;
use App\Http\Controllers\Depan\Tentang\StrukturwebController;
use App\Http\Controllers\Depan\Tentang\VisimisiwebController;
use App\Http\Controllers\Depan\Media\FotowebController;
use App\Http\Controllers\Depan\Media\VideowebController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
// Admin
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
    // profil
    Route::get('divisi', [DivisiController::class, 'index']);
    Route::post('divisi', [DivisiController::class, 'store']);
    Route::get('divisi/{divisi}', [DivisiController::class, 'show']);
    Route::put('divisi/{divisi}', [DivisiController::class, 'update']);
    Route::get('divisi/infoanggota/{dataAnggota}', [DivisiController::class, 'infoanggota']);
    Route::delete('divisi/deleteanggotaall/{list_detail}', [DivisiController::class, 'deleteanggotaall']);
    Route::delete('divisi/deleteanggota/{dataAnggota}', [DivisiController::class, 'deleteanggota']);
    Route::delete('divisi/{divisi}', [DivisiController::class, 'delete']);

    // data anggota start
    Route::delete('anggota/{anggota}', [AnggotaController::class, 'delete']);
    Route::put('anggota/{anggota}', [AnggotaController::class, 'update']);
    Route::resource('anggota', AnggotaController::class);
    // data berita start
    Route::delete('berita/{berita}', [BeritaController::class, 'delete']);
    Route::put('berita/{berita}', [BeritaController::class, 'update']);
    Route::resource('berita', BeritaController::class);
    // data event start
    Route::resource('event', EventController::class);
    // data Galeri start
    Route::resource('galeri', GaleriController::class);
    // data Galeri start
    Route::resource('profil', ProfilController::class);

    // data Admin Start
    Route::resource('admin', AdminController::class);
});

Route::get('/', [HomeController::class, 'index']);

// Tampilan Depan
// beranda
Route::get('beranda', [HomeController::class, 'index']);
// galeri
Route::get('foto', [HomeController::class, 'galeri']);
// berita
Route::get('berita', [BeritawebController::class, 'berita']);
Route::get('berita/detail/{berita}', [BeritawebController::class, 'beritadetail']);
// Event
Route::get('event', [EventwebController::class, 'event']);
// Sejarah
Route::get('sejarah', [SejarahwebController::class, 'sejarah']);
// Visi-Misi
Route::get('visi_misi', [VisimisiwebController::class, 'visi_misi']);
// Struktur Pengurus
Route::get('struktur_organisasi', [StrukturwebController::class, 'struktur_organisasi']);
