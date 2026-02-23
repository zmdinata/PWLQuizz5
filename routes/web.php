<?php
use Illuminate\Support\Facades\Route;
// --- LANGKAH PENTING --- 
// Import Controller yang baru saja dibuat 
use App\Http\Controllers\InfoController;
// Menghubungkan URL ke Controller 
Route::get('/halo', [InfoController::class, 'halo']);
Route::get('/ikmi', [InfoController::class, 'kampus']);
Route::get('/dosen', [InfoController::class, 'dosen']);
Route::get('/mahasiswa/{nama}/{nim}', [InfoController::class, 'detailMahasiswa']);

use App\Http\Controllers\ProdukController;
// Satu baris ini mewakili 7 rute sekaligus! Route::resource('produk', ProdukController::class);
Route::resource('produk', ProdukController::class);

use App\Http\Controllers\KategoriController;
Route::resource('kategori', KategoriController::class);

use App\Http\Controllers\BukuController;
Route::resource('koleksi', BukuController::class);