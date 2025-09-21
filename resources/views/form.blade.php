@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Formulir Input Data</h2>

    <form action="/submit-form" method="POST"
    enctype="multipart/form-data"
    class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label class="block">Nama:</label>
            <input type="text" name="nama" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block">Email:</label>
            <input type="email" name="email" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block">Nomor Telepon:</label>
            <input type="text" name="phone" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block">Alamat:</label>
            <textarea type="text" name="alamat" class="border rounded w-full p-2"></textarea>
        </div>
        
        <div class="mb-4">
            <label class="block">Upload file</label>
            <input type="file" name="file" class="block w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Submit
        </button>
    </form>
@endsection
