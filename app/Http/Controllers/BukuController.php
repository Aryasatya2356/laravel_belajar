<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $judul = 'SEPORSI MIE AYAM';
        $reviewparagraf1 = 'Seporsi Mie Ayam Sebelum Mati" adalah novel Karya Brian Khrisna yang menyuguhkan kisah perjuangan Ale. Seorang penderita depresi, dalam menemukan makna hidup di tengah isolasi sosial dan perlakuan buruk yang ia terima. Melalui perjalanan Ale mencari seporsi mie ayam terakhirnya, novel ini mengajukan pesan tentang kesehatan, pentingnya menerima diri dan menghargai hal-hal kecil dalam kehidupan.';
        $reviewparagraf2 = 'Dengan gaya bahasa yang jenaka, cerita ringan dan dikemas dengan unser humor serta refleksi mendalam, buku ini mengajak pembaca untuk merenungkan pentingnya bertahan hitup dengan penerimaan, bukan hanya';
        return view('buku', compact('judul', 'reviewparagraf1', 'reviewparagraf2'));
    }
}
