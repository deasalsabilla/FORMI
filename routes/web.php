<?php

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
use App\Http\Controllers\KatMateriController;
use App\Http\Controllers\mataKuliahController;
use App\Http\Controllers\sidebarMKController;

Route::get('/', function () {
    return view('user.home');
});
Route::get('/diskusi-materi-kuliah', function () {
    return view('materiKuliah');
});
Route::get('/post-details', function () {
    return view('post-details');
});
Route::get('/profil-mahasiswa', function () {
    return view('profilmhs');
});
Route::get('/proyek-kolaboratif', function () {
    return view('user.proyekkolaboratif');
});
Route::get('/admin', function () {
    return view('admin.homeAdmin');
});
Route::get('/admin/kelola-kategori-materi', function () {
    return view('admin.kelKategoriMateri');
});
Route::get('/admin/kelola-mata-kuliah', function () {
    return view('admin.kelMataKuliah');
});
Route::get('/tes', function () {
    return view('tes');
});

Route::get('/diskusi-materi-kuliah', [sidebarMKController::class, 'index'])->name('sidebar.index');

Route::get('/admin/kelola-kategori-materi', [KatMateriController::class, 'index'])->name('kategori-materi.index');
Route::post('/admin/kelola-kategori-materi/store', [KatMateriController::class, 'store'])->name('kategori-materi.store');
Route::get('/admin/kelola-kategori-materi/{kode}/edit', [KatMateriController::class, 'edit'])->name('kategori-materi.edit');
Route::put('/admin/kelola-kategori-materi/{kode}', [KatMateriController::class, 'update'])->name('kategori-materi.update');
Route::delete('/admin/kelola-kategori-materi/{kode}', [KatMateriController::class, 'destroy'])->name('kategori-materi.destroy');

Route::get('/admin/kelola-mata-kuliah', [mataKuliahController::class, 'index'])->name('mata-kuliah.index');
Route::post('/admin/kelola-mata-kuliah/store', [mataKuliahController::class, 'store'])->name('mata-kuliah.store');
Route::get('/admin/kelola-mata-kuliah/{kode}/edit', [mataKuliahController::class, 'edit'])->name('mata-kuliah.edit');
Route::put('/admin/kelola-mata-kuliah/{kode}', [mataKuliahController::class, 'update'])->name('mata-kuliah.update');
Route::delete('/admin/kelola-mata-kuliah/{kode}', [mataKuliahController::class, 'destroy'])->name('mata-kuliah.destroy');
