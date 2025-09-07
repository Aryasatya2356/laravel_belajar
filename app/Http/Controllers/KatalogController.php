<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Kopi Arabika Toraja',
                'price' => 'Rp 55.000',
                'description' => 'Biji kopi pilihan dari pegunungan Toraja dengan aroma khas rempah.',
                'image' => 'kopi.jpg'
            ],
            [
                'name' => 'Laptop Gaming Terbaru',
                'price' => 'Rp 15.000.000',
                'description' => 'Performa tinggi untuk gaming dan multitasking tanpa hambatan.',
                'image' => 'laptop.jpg'
            ],
            [
                'name' => 'Buku Belajar Laravel',
                'price' => 'Rp 95.000',
                'description' => 'Panduan lengkap untuk pemula dalam membangun aplikasi web dengan Laravel.',
                'image' => 'buku.jpg'
            ]
        ];

        return view('katalog', compact('products'));
    }
}