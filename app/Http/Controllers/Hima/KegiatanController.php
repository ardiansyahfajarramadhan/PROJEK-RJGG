<?php

namespace App\Http\Controllers\Hima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    // Function 6: Menampilkan semua data kegiatan/proker
    public function index()
    {
        // Variabel 2: $daftarKegiatan
        $daftarKegiatan = [
            ['id_kegiatan' => 'K-001', 'nama_proker' => 'JuaraVibe Coding Bootcamp', 'status' => 'Disetujui'],
            ['id_kegiatan' => 'K-002', 'nama_proker' => 'Olimpiade PHION', 'status' => 'Menunggu'],
        ];

        // Melempar variabel ke file view kegiatan.blade.php
        return view('hima.kegiatan', compact('daftarKegiatan'));
    }

    // Function 7: Menampilkan form usulan kegiatan (Dummy response)
    public function usulkan()
    {
        return response()->json([
            'status' => 'info',
            'pesan' => 'Endpoint ini untuk memuat form pengajuan usulan kegiatan.'
        ]);
    }

    // Function 8: Memproses penyimpanan usulan kegiatan
    public function simpanUsulan(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Usulan kegiatan baru berhasil disubmit (Simulasi).'
        ]);
    }

    // Function 9: Mengubah status kegiatan menjadi disetujui
    public function persetujuan($id)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Proposal kegiatan dengan ID ' . $id . ' telah disetujui.'
        ]);
    }

    // Function 10: Membatalkan kegiatan
    public function batalkan($id)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Kegiatan dengan ID ' . $id . ' berhasil dibatalkan.'
        ]);
    }
}
