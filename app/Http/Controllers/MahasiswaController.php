<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $nama = "Aryasatya Maheswara";
        return view('mahasiswa', compact('nama'));
    }
}
