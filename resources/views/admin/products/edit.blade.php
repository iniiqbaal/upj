@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <h1>Edit Produk</h1>

    {{-- ALERT ERROR --}}
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

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>

        <label>Deskripsi:</label>
        <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>

        <label>Harga:</label>
        <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>

        <label>Nomor WhatsApp:</label>
        <input type="text" name="whatsapp_number" class="form-control" value="{{ old('whatsapp_number', $product->whatsapp_number) }}" placeholder="628xxxxxxxxxxx">

        <label>Gambar Lama:</label><br>
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" width="150" class="mb-2">
        @else
            <p class="text-muted">Tidak ada gambar</p>
        @endif

        <label>Upload Gambar Baru (Opsional):</label>
        <input type="file" name="image" class="form-control" accept=".jpg,.jpeg,.png">

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
