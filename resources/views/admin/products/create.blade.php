@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <h1>Tambah Produk</h1>

    {{-- Notifikasi Error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada kesalahan saat mengisi form:
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Produk:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>

        <label>Deskripsi:</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>

        <label>Harga:</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>

        <label>Nomor WhatsApp:</label>
        <input type="text" name="whatsapp_number" class="form-control" value="{{ old('whatsapp_number') }}" placeholder="62xxxxxxxxxx">

        <label>Gambar:</label>
        <input type="file" name="image" class="form-control" accept=".jpg,.jpeg,.png">

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
