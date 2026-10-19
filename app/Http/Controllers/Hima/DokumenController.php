<?php

namespace App\Http\Controllers\Hima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    // Deklarasi Variabel 3 agar bisa dipakai di banyak function
    private $daftarDokumen;

    public function __construct()
    {
        // Inisialisasi isi variabel yang berelasi dengan ID Kegiatan
        $this->daftarDokumen = [
            ['id_dok' => 'D-001', 'id_kegiatan' => 'K-001', 'jenis' => 'Proposal', 'file' => 'proposal_vibe.pdf'],
            ['id_dok' => 'D-002', 'id_kegiatan' => 'K-002', 'jenis' => 'Aturan', 'file' => 'draft_phion.docx'],
        ];
    }

    public function index()
    {
        // Menggunakan variabel untuk ditampilkan di tabel View
        return view('hima.dokumen', ['daftarDokumen' => $this->daftarDokumen]);
    }

    public function unggah()
    {
        return "Form untuk mengunggah dokumen baru ke dalam sistem.";
    }

    public function simpanDokumen(Request $request)
    {
        return "Dokumen berhasil disimpan dan dicatat ke dalam variabel arsip.";
    }

    public function unduh($id)
    {
        // Menggunakan variabel untuk mencari file yang akan diunduh
        return "Mencari file dokumen ID " . $id . " di dalam variabel daftarDokumen untuk diunduh.";
    }

    public function hapus($id)
    {
        return "Menghapus arsip dokumen ID " . $id . " dari variabel daftarDokumen.";
    }
}
