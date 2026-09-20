<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function index()
    {
        return view('datadiri'); // Kita akan buat view ini di langkah berikutnya
    }
}