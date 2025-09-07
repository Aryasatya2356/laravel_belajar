<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index(){
        $namaMakanan ='Tongkol Balado';
        $deksripsi = 'Tongkol balado adalah salah satu hidangan khas Minang yang terkenal dengan perpaduan rasa pedas dan gurih. Ikan tongkol yang digoreng hingga kering kemudian dibalur dengan sambal balado yang khas, menjadikan hidangan ini sangat nikmat disajikan dengan nasi hangat. Berikut adalah resep sederhana untuk membuat tongkol balado yang lezat di rumah.';
        return view('makanan', compact('namaMakanan', 'deksripsi'));
    }
}
