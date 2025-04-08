@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <h1>Tambah Produk</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nama Produk:</label>
        <input type="text" name="name" class="form-control" required>

        <label>Deskripsi:</label>
        <textarea name="description" class="form-control"></textarea>

        <label>Harga:</label>
        <input type="number" name="price" class="form-control" required>

        <label>Nomor WhatsApp:</label>
        <input type="text" name="whatsapp_number" class="form-control" placeholder="62xxxxxxxxxx">

        <label>Gambar:</label>
        <input type="file" name="image" class="form-control">

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
