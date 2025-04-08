@extends('layouts.admin')

@section('title', 'Daftar Jasa')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
 <h1>Daftar Jasa</h1>
    <a href="{{ route('admin.jasa.create') }}" class="btn btn-primary">Tambah Jasa</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
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
                      {{-- <td>{{ $index + 1 }}</td> --}}
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
                        <a href="{{ route('admin.jasa.edit', $jasa->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.jasa.destroy', $jasa->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

</div>
   