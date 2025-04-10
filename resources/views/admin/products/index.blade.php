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
                <td>{{ $product->whatsapp_number }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <!-- Tombol Hapus -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $product->id }}">
                        Hapus
                    </button>

                    <!-- Modal Konfirmasi -->
                    <div class="modal fade" id="modalDelete{{ $product->id }}" tabindex="-1" aria-labelledby="modalDeleteLabel{{ $product->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-sm"> {{-- modal-sm: ukuran kecil --}}
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalDeleteLabel{{ $product->id }}">Konfirmasi Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                            Yakin ingin hapus<br><strong>{{ $product->name }}</strong>?
                          </div>
                          <div class="modal-footer justify-content-center">
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
