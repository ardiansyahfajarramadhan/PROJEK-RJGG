<?php

namespace App\Http\Controllers;

class Kalkulator2Controller extends Controller
{
    public function alatBantu2()
    {
        $angka1 = 12;
        $angka2 = 4;


        $penjumlahan = $angka1 + $angka2;
        $pengurangan = $angka1 - $angka2;
        $perkalian   = $angka1 * $angka2;

        $pembagian   = $angka2 != 0 ? ($angka1 / $angka2) : 'Tidak terhingga';

        return view('kalkulator', compact('angka1', 'angka2', 'penjumlahan', 'pengurangan', 'perkalian', 'pembagian'));
    }
}
