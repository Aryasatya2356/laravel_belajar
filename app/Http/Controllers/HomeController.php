<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nama = 'ARYASATYA';
        $kelas = 'TRPL 2C';
        return view('home', compact('nama','kelas'));
    }
}
