@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h2>Edit Landing Page</h2>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Website</label>
            <input type="text" name="site_title" class="form-control" value="{{ $setting->site_title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="site_description" class="form-control">{{ $setting->site_description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Hero Image</label>
            <input type="file" name="hero_image" class="form-control">
            @if ($setting->hero_image)
                <img src="{{ asset('storage/' . $setting->hero_image) }}" class="img-fluid mt-2" width="200">
            @endif
        </div>

        <h4>Sosial Media</h4>
        <div class="mb-3">
            <label class="form-label">Facebook</label>
            <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Instagram</label>
            <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Twitter</label>
            <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
