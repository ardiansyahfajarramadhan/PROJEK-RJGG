<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\ListMahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\Kalkulator2Controller;
use App\Http\Controllers\Hima\AnggotaController;
use App\Http\Controllers\Hima\KegiatanController;
use App\Http\Controllers\Hima\DokumenController;

Route::get('/datadiri', [DataDiriController::class, 'index']);


// Route untuk profill
Route::prefix('v1')->group(function () {
    Route::get('/datadiri', [DataDiriController::class, 'index']);
    Route::get('/listmahasiswa/{nama}', [ListMahasiswaController::class, 'Mahasiswa']);
});


// Route untuk kalkulator
Route::prefix('v1')->group(function () {
    // Route tunggal untuk kalkulator
    Route::get('/hitung-dasar', [KalkulatorController::class, 'hitung']);
    Route::get('/hitung-dasar/{angka1}/{angka2}', [KalkulatorController::class, 'hitungDenganParameter']);
    Route::get('/alatbantu/{angka1}/{angka2}', [KalkulatorController::class, 'alatKalkulator']);
    Route::get('/alatbantu2', [Kalkulator2Controller::class, 'alatBantu2']);
});

// Route untuk HIMA
Route::prefix('hima')->group(function () {

    Route::controller(AnggotaController::class)->prefix('anggota')->group(function () {
        Route::get('/', 'index');               // Menampilkan View Anggota
        Route::get('/tambah', 'tambah');        // Halaman tambah anggota
        Route::post('/simpan', 'simpan');       // Proses simpan data
        Route::get('/{id}', 'detail');          // Lihat detail anggota (ID)
        Route::delete('/{id}', 'nonaktifkan');  // Hapus/Nonaktifkan anggota
    });

    Route::controller(KegiatanController::class)->prefix('kegiatan')->group(function () {
        Route::get('/', 'index');               // Menampilkan View Kegiatan
        Route::get('/usulkan', 'usulkan');      // Halaman pengajuan proker
        Route::post('/simpan', 'simpanUsulan'); // Proses simpan proker
        Route::patch('/{id}/setuju', 'persetujuan'); // Proses ACC proker (ID)
        Route::delete('/{id}', 'batalkan');     // Hapus/Batal proker
    });

    Route::controller(DokumenController::class)->prefix('dokumen')->group(function () {
        Route::get('/', 'index');               // Menampilkan View Dokumen
        Route::get('/unggah', 'unggah');        // Halaman upload dokumen
        Route::post('/simpan', 'simpanDokumen'); // Proses simpan dokumen
        Route::get('/{id}/unduh', 'unduh');     // Proses download dokumen (ID)
        Route::delete('/{id}', 'hapus');        // Hapus dokumen
    });
});



Route::get('/', function () {
    return view('welcome');
});
