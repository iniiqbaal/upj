@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <h1>Daftar Produk</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>WhatsApp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td>
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" width="50">
                    @else
                        <span class="text-muted">Tidak ada gambar</span>
                    @endif
                </td>
                <td>
                    {{ $product->whatsapp_number }}
                </td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
