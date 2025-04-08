@extends('layouts.admin')

@section('title', 'Pengaturan Website')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h2>Pengaturan Website</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Hero Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $setting->site_title }}</td>
                <td>{{ $setting->site_description }}</td>
                <td>
                    @if ($setting->hero_image)
                        <img src="{{ asset('storage/' . $setting->hero_image) }}" width="100">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td>
                    <a href="{{ route('settings.edit') }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>

    <h4>Sosial Media</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Twitter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $setting->facebook }}</td>
                <td>{{ $setting->instagram }}</td>
                <td>{{ $setting->twitter }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('settings.edit') }}" class="btn btn-primary">Edit Pengaturan</a>
</div>
@endsection