<?php

namespace App\Http\Controllers\Hima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Deklarasi Variabel 1 agar bisa dipakai di banyak function
    private $daftarAnggota;

    public function __construct()
    {
        // Inisialisasi isi variabel
        $this->daftarAnggota = [
            ['id' => 2555200005, 'nama' => 'Ardian Syah Fajar R', 'divisi' => 'Ketua HIMA', 'status' => 'Aktif'],
            ['id' => 2555200006, 'nama' => 'Abdullah Muzakki', 'divisi' => 'Humas', 'status' => 'Aktif'],
        ];
    }

    public function index()
    {
        // Menggunakan variabel untuk ditampilkan di tabel View
        return view('hima.anggota', ['daftarAnggota' => $this->daftarAnggota]);
    }

    public function tambah()
    {
        return "Form untuk menambah anggota HIMA ke dalam data variabel.";
    }

    public function simpan(Request $request)
    {
        return "Data anggota baru berhasil ditambahkan ke variabel pendaftaran.";
    }

    public function detail($id)
    {
        // Menggunakan variabel untuk mensimulasikan pencarian data
        return "Mencari data dengan ID " . $id . " di dalam variabel daftarAnggota...";
    }

    public function nonaktifkan($id)
    {
        return "Menghapus ID " . $id . " dari variabel daftarAnggota...";
    }
}
