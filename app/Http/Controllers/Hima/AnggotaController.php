<?php

namespace App\Http\Controllers\Hima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Function 1: Menampilkan semua data anggota
    public function index()
    {
        // Variabel 1: $daftarAnggota
        $daftarAnggota = [
            ['id' => 2555200005, 'nama' => 'Ardian Syah Fajar R', 'divisi' => 'Ketua HIMA', 'status' => 'Aktif'],
            ['id' => 2555200006, 'nama' => 'Abdullah Muzakki', 'divisi' => 'Humas', 'status' => 'Aktif'],
        ];

        return view('hima.anggota', compact('daftarAnggota'));
    }

    // Function 2: Menampilkan form tambah anggota (Dummy response)
    public function tambah()
    {
        return response()->json([
            'status' => 'info',
            'pesan' => 'Endpoint ini untuk memuat form pendaftaran anggota baru.'
        ]);
    }

    // Function 3: Memproses penyimpanan data anggota baru
    public function simpan(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Data anggota baru berhasil disimpan (Simulasi).'
        ]);
    }

    // Function 4: Menampilkan detail satu anggota berdasarkan ID
    public function detail($id)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Menampilkan detail profil untuk ID Mahasiswa: ' . $id
        ]);
    }

    // Function 5: Menonaktifkan atau menghapus anggota
    public function nonaktifkan($id)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Anggota dengan ID ' . $id . ' berhasil dinonaktifkan.'
        ]);
    }
}
