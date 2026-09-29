<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListMahasiswaController extends Controller
{
    public function index()
    {
        return view('Mahasiswa');
    }

    public function Mahasiswa($nama)
    {
        return view('Mahasiswa', compact('nama'));
    }
}
