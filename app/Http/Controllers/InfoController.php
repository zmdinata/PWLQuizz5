<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
class InfoController extends Controller
{
    // Membuat method baru 
    public function halo()
    {
        return "Halo! Ini adalah respon dari InfoController.";
    }

    public function kampus()
    {
        return "Saya kuliah di STMIK IKMI Cirebon";
    }

    // ... method halo sebelumnya ...

    public function dosen(): View
    {
        // 1. Menyiapkan data dalam variabel
        $namaDosen = "Rudi Kurniawan, S.Kom., M.T.";
        $matkul = "Pemrograman Web Lanjut";
        $mahasiswa = ["Zacky M Dinata", "Tion Hermawan", "Abdul Rohman"]; // Contoh data Array
        $tahun = "2025/2026";
        $umur = "19+";

        // 2. Mengirim data ke view menggunakan fungsi compact() atau array
        return view('info_dosen', [
            'nama' => $namaDosen,
            'mata_kuliah' => $matkul,
            'list_mhs' => $mahasiswa,
            'tahun' => $tahun,
            'umur' => $umur
        ]);
    }

    /**
     * Menampilkan detail mahasiswa berdasarkan nama
     */
    public function detailMahasiswa($nama, $nim): View
    {
        // Parameter $nama dan $nim diambil dari URL
        return view('detail_mahasiswa', [
            'nama_mhs' => $nama,
            'nim_mhs' => $nim
        ]);
    }

}
