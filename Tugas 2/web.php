<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;

// tugas 1 dan 2 Pertemuan 11
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/', function () {
    return view('home');
})->name('home');
 
// Resource route untuk Buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/search', [BukuController::class, 'search']);

// Tugas 3 pertemuan 11
Route::resource('buku', BukuController::class);

// Custom route untuk filter kategori
Route::get('/buku/kategori/{kategori}', [BukuController::class, 'filterKategori'])
    ->name('buku.kategori');

// Tugas 2 Pertemuan 12
Route::post('/buku/bulk-delete', [BukuController::class, 'bulkDelete'])
    ->name('buku.bulk-delete');
 
// Resource route untuk Anggota (akan dibuat nanti)
Route::resource('anggota', AnggotaController::class);
