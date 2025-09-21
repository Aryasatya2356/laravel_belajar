<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //menampilkan form
   public function create()
   {
    return view('form');
   }

   //proses submit
   public function submit(Request $request)
   {
    //validasi server-side
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',

        //file max
        'file' => 'nullable|file|max:2048'
    ]);

    $fileName = null;
    $fileUrl = null;

    if ($request->hasFile('file')){
        //simpan ke storage/app/public/uploads
        $path = $request->file('file')->store('uploads', 'public');
        $fileName = basename($path);
        //url yang dapat diakses publik
        $fileUrl = asset('storage/' . $path);
    }

    //return ke view show dengan data
    return view('show', [
        'nama' => $validated['nama'],
        'email' => $validated['email'],
        'phone' => $request->input('phone'), 
        'alamat' => $request->input('alamat'),
        'fileName' => $fileName,
        'fileUrl' => $fileUrl,
    ]);

   }
}
