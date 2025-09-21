@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-x1 font-bold mb-4">Data Diterimma</h2>

        <p><strong>Nama :</strong> {{$nama}}</p>
        <p><strong>Email :</strong> {{$email}}</p>
        <p><strong>No telepon :</strong> {{$phone}}</p>
        <p><strong>Alamat :</strong> {{$alamat}}</p>

        @if (!empty($fileUrl))
            <p class="mt-3">
                <strong>File:</strong><a href="{{ $fileUrl }}" target="_blank" class="text-blue-600 hover:underline">{{ $fileName }}</a>
            </p>
        @else
            <p class="mt-3">
            <strong>File:</strong> Tidak ada file diunggah. 
            </p>
        @endif
    </div>
@endsection
