@extends('layouts.admin')
@section('title', 'Edit Admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h2>Edit Admin</h2>
    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password (Opsional)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
