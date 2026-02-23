# 📚 Quiz Evaluasi: Controller & Routing (Modul 5)

**Mata Kuliah:** Pemrograman Web Lanjut (Laravel 12)  
**Nama:** Zacky Muhammad Dinata  
**NIM:** 43240450  
**Kampus:** STMIK IKMI Cirebon 
**Link GDrive:** https://drive.google.com/drive/folders/130sUiaEzef8kHbVt_RNFL62jLMotiAgl?usp=sharing

---

## 🛠️ Tugas yang Dikerjakan

1. **Resource Controller:** Membuat `BukuController` untuk manajemen koleksi perpustakaan.
2. **Resource Routing:** Mendaftarkan rute tunggal `/koleksi` yang mencakup 7 method standar CRUD.
3. **Data Binding:** Mengirim data array judul buku dari Controller ke View menggunakan Laravel Blade.
4. **Dynamic URL:** Mengimplementasikan parameter ID pada method `show` untuk menampilkan detail buku secara dinamis.

---

## 🚀 Cara Menjalankan Proyek

Untuk memeriksa hasil pekerjaan, silakan ikuti langkah berikut:

1. **Halaman Daftar Buku:**  
   Akses URL: `http://localhost:8000/koleksi`  
   *Output: Menampilkan list judul buku menggunakan `@foreach`.*

2. **Halaman Detail Buku:**  
   Akses URL: `http://localhost:8000/koleksi/{id}` (Contoh: `/koleksi/101`)  
   *Output: Menampilkan teks detail buku sesuai ID yang dimasukkan.*

3. **Cek List Rute:**  
   Jalankan perintah berikut di terminal:
   ```bash
   php artisan route:list --path=koleksi
   ```

---

## 📊 Analisis Mandiri

- **`Route::resource`** jauh lebih efisien daripada menulis 7 rute satu per satu secara manual.
- **`use App\Http\Controllers\BukuController;`** wajib ditulis di `web.php` agar Laravel mengenali class tersebut.
- Data dari Controller harus dibungkus dalam **array** atau menggunakan fungsi **`compact()`** agar bisa diterima oleh View.
- **Type-hinting `View`** pada method `index()` merupakan standar Laravel 12 yang memastikan return type sudah benar secara eksplisit.

---

## 📁 File Terkait

| File | Keterangan |
|------|-----------|
| `app/Http/Controllers/BukuController.php` | Resource Controller utama |
| `resources/views/perpus_index.blade.php` | View daftar buku dengan `@foreach` |
| `routes/web.php` | Pendaftaran `Route::resource('koleksi', ...)` |

