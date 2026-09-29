<?php

namespace App\Http\Controllers;

class KalkulatorController extends Controller
{

    //variabel untuk kalkulator
    public function kurang($angka1, $angka2)
    {
        $hasil = $angka1 - $angka2;
        return $hasil;
    }
    public function tambah($angka1, $angka2)
    {
        $hasil = $angka1 + $angka2;
        return $hasil;
    }
    public function kali($angka1, $angka2)
    {
        $hasil = $angka1 * $angka2;
        return $hasil;
    }
    public function bagi($angka1, $angka2)
    {
        if ($angka2 == 0) {
            return "Tidak dapat membagi dengan nol";
        }
        $hasil = $angka1 / $angka2;
        return $hasil;
    }


    public function alatKalkulator($angka1, $angka2)
    {
        $variabel1 = $this->tambah($angka1, $angka2);
        $variabel2 = $this->kurang($angka1, $angka2);
        $variabel3 = $this->kali($angka1, $angka2);
        $variabel4 = $this->bagi($angka1, $angka2);

        return view('hasil', compact('angka1', 'angka2', 'variabel1', 'variabel2', 'variabel3', 'variabel4'));
    }
}
