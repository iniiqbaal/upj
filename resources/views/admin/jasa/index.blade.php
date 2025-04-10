@extends('layouts.admin')

@section('title', 'Daftar Jasa')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <h1>Daftar Jasa</h1>
    <a href="{{ route('admin.jasa.create') }}" class="btn btn-primary mb-3">Tambah Jasa</a>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="table">
            <tr>
                <th>Gambar</th>
                <th>Nama Jasa</th>
                <th>No WhatsApp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jasas as $jasa)
                <tr>
                    <td>
                        @if($jasa->img_jasa)
                            <img src="{{ asset('storage/' . $jasa->img_jasa) }}" 
                                 alt="{{ $jasa->nama_jasa }}"
                                 style="width: 100px; height: 100px; object-fit: cover;"
                                 class="rounded">
                        @else
                            <span class="badge bg-label-warning">No Image</span>
                        @endif
                    </td>
                    <td>{{ $jasa->nama_jasa }}</td>
                    <td>{{ $jasa->no_whatsapp }}</td>
                    <td>
                        <a href="{{ route('admin.jasa.edit', $jasa->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol untuk membuka modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $jasa->id }}">
                            Hapus
                        </button>

                        <!-- Modal Konfirmasi -->
                        <div class="modal fade" id="deleteModal{{ $jasa->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $jasa->id }}" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $jasa->id }}">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Yakin ingin menghapus jasa <strong>{{ $jasa->nama_jasa }}</strong>?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('admin.jasa.destroy', $jasa->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
