<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(){
        $judulanime = 'JUJUTSU KAISEN';
        $review = 'Saya menonton anime ini ketika covid. Ceritanya yang membahas dunia supranatural penyihir membuat saya tertarik. 
                Apalagi opening dan ending dari Jujutsu Kaisen yang lagu-nya enak di dengar, mengingatkan nostalgia waktu kecil semasa 
                saya menonton Naruto. Dari segi plot cerita karakter lumayan bagus, premis ceritanya juga keren. 
                Apalagi ada karakter over power khas shounen. Ini salah satu anime favorit saya.';
        return view('anime', compact('judulanime', 'review'));

    }
}
