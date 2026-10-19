<?php

namespace App\Http\Controllers\Hima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    // Deklarasi Variabel 2 agar bisa dipakai di banyak function
    private $daftarKegiatan;

    public function __construct()
    {
        // Inisialisasi isi variabel
        $this->daftarKegiatan = [
            ['id_kegiatan' => 'K-001', 'nama_proker' => 'JuaraVibe Coding Bootcamp', 'status' => 'Disetujui'],
            ['id_kegiatan' => 'K-002', 'nama_proker' => 'Olimpiade PHION', 'status' => 'Menunggu'],
        ];
    }

    public function index()
    {
        // Menggunakan variabel untuk ditampilkan di tabel View
        return view('hima.kegiatan', ['daftarKegiatan' => $this->daftarKegiatan]);
    }

    // public function usulkan()
    // {
    //     return "Form untuk mengusulkan proker baru ke dalam variabel.";
    // }

    // public function simpanUsulan(Request $request)
    // {
    //     return "Usulan kegiatan berhasil ditambahkan ke variabel sementara.";
    // }

    // public function persetujuan($id)
    // {
    //     // Menggunakan variabel untuk mengubah status persetujuan
    //     return "Mengubah status proker ID " . $id . " di dalam variabel daftarKegiatan menjadi Disetujui.";
    // }

    // public function batalkan($id)
    // {
    //     return "Membatalkan proker ID " . $id . " dari variabel daftarKegiatan.";
    // }
}
