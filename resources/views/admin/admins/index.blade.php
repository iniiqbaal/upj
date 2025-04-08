@extends('layouts.admin')
@section('title', 'Admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h2>Daftar Admin</h2>
    <a href="{{ route('admin.admins.create') }}" class="btn btn-primary">Tambah Admin</a>

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
                    <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
