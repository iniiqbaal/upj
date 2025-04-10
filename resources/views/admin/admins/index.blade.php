@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h2>Daftar Admin</h2>
    <a href="{{ route('admin.admins.create') }}" class="btn btn-primary mb-3">Tambah Admin</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <!-- Tombol Hapus dengan Modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $admin->id }}">
                            Hapus
                        </button>

                        <!-- Modal Konfirmasi -->
                        <div class="modal fade" id="confirmDeleteModal{{ $admin->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $admin->id }}" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel{{ $admin->id }}">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                              </div>
                              <div class="modal-body">
                                Apakah kamu yakin ingin menghapus admin <strong>{{ $admin->name }}</strong>?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
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
