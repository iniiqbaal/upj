@extends('layouts.admin')

@section('title', $jasa->id ? 'Edit Jasa' : 'Tambah Jasa')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h1>{{ $jasa->id ? 'Edit Jasa' : 'Tambah Jasa' }}</h1>

    <form action="{{ $jasa->id ? route('admin.jasa.update', $jasa->id) : route('admin.jasa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($jasa->id) @method('PUT') @endif

        <div class="mb-3">
            <label for="nama_jasa" class="form-label">Nama Jasa</label>
            <input type="text" class="form-control" id="nama_jasa" name="nama_jasa" 
                   value="{{ old('nama_jasa', $jasa->nama_jasa) }}" required>
        </div>

        <div class="mb-3">
            <label for="no_whatsapp" class="form-label">No WhatsApp</label>
            <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" 
                   value="{{ old('no_whatsapp', $jasa->no_whatsapp) }}" required placeholder="62xxxxxxxxxx">
        </div>

        {{-- <div class="mb-3">
            <label for="pesan_whatsapp" class="form-label">Pesan WhatsApp</label>
            <textarea class="form-control" id="pesan_whatsapp" name="pesan_whatsapp" required>{{ old('pesan_whatsapp', $jasa->pesan_whatsapp) }}</textarea>
        </div> --}}

        <div class="mb-3">
            <label for="img_jasa" class="form-label">Gambar Jasa</label>
            <input type="file" class="form-control" id="img_jasa" name="img_jasa" 
                   accept="image/*" {{ !$jasa->id ? 'required' : '' }}>
            @if($jasa->img_jasa)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $jasa->img_jasa) }}" 
                         alt="Preview" class="img-thumbnail" style="max-height: 200px">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
</div>
