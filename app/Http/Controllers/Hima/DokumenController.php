<?php

namespace App\Http\Controllers\Hima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    // Function 11: Menampilkan semua data dokumen
    public function index()
    {
        // Variabel 3: $daftarDokumen
        $daftarDokumen = [
            ['id_dok' => 'D-001', 'id_kegiatan' => 'K-001', 'jenis' => 'Proposal', 'file' => 'proposal_vibe.pdf'],
            ['id_dok' => 'D-002', 'id_kegiatan' => 'K-002', 'jenis' => 'Aturan', 'file' => 'draft_phion.docx'],
        ];

        // Melempar variabel ke file view dokumen.blade.php
        return view('hima.dokumen', compact('daftarDokumen'));
    }

    // Function 12: Menampilkan form unggah dokumen (Dummy response)
    public function unggah()
    {
        return response()->json([
            'status' => 'info',
            'pesan' => 'Endpoint ini untuk memuat form upload dokumen (Proposal/LPJ).'
        ]);
    }

    // Function 13: Memproses upload file dokumen
    public function simpanDokumen(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'File dokumen berhasil diunggah dan disimpan ke sistem (Simulasi).'
        ]);
    }

    // Function 14: Memproses permintaan unduhan dokumen
    public function unduh($id)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Memulai proses pengunduhan dokumen ID: ' . $id
        ]);
    }

    // Function 15: Menghapus arsip dokumen
    public function hapus($id)
    {
        return response()->json([
            'status' => 'success',
            'pesan' => 'Arsip dokumen dengan ID ' . $id . ' berhasil dihapus permanen.'
        ]);
    }
}
