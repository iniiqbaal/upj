<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JasaController extends Controller
{
    public function index()
    {
        $jasas = Jasa::all();
        return view('admin.jasa.index', compact('jasas'));
    }

    public function create()
    {
        return view('admin.jasa.form', ['jasa' => new Jasa()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jasa' => 'required|string|max:255',
            'no_whatsapp' => 'required|string|max:15',
            'img_jasa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('img_jasa')) {
            $file = $request->file('img_jasa');
            $path = $file->store('jasa-images', 'public');
            $data['img_jasa'] = $path;
        }

        Jasa::create($data);

        return redirect()->route('admin.jasa.index')->with('success', 'Jasa berhasil ditambahkan');
    }

    public function edit(Jasa $jasa)
    {
        return view('admin.jasa.form', compact('jasa'));
    }

    public function update(Request $request, Jasa $jasa)
    {
        $request->validate([
            'nama_jasa' => 'required|string|max:255',
            'no_whatsapp' => 'required|string|max:15',
            'img_jasa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('img_jasa')) {
            // Hapus file lama jika ada
            if ($jasa->img_jasa && Storage::disk('public')->exists($jasa->img_jasa)) {
                Storage::disk('public')->delete($jasa->img_jasa);
            }
            
            $file = $request->file('img_jasa');
            $path = $file->store('jasa-images', 'public');
            $data['img_jasa'] = $path;
        } else {
            // Jika tidak ada file baru, gunakan gambar yang lama
            unset($data['img_jasa']);
        }

        $jasa->update($data);

        return redirect()->route('admin.jasa.index')->with('success', 'Jasa berhasil diperbarui');
    }

    public function destroy(Jasa $jasa)
    {
        // Hapus file gambar dari storage
        if ($jasa->img_jasa && Storage::disk('public')->exists($jasa->img_jasa)) {
            Storage::disk('public')->delete($jasa->img_jasa);
        }
        
        $jasa->delete();
        return redirect()->route('admin.jasa.index')->with('success', 'Jasa berhasil dihapus');
    }
}
