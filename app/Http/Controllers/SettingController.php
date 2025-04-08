<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('admin.settings.index',compact('setting'));
    }

    public function edit()
    {
        $setting = Setting::first();
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();
        $setting->update([
            'site_title' => $request->site_title,
            'site_description' => $request->site_description,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('hero_image')) {
            $file = $request->file('hero_image')->store('public');
            $setting->update(['hero_image' => str_replace('public/', '', $file)]);
        }

        return redirect()->back()->with('success', 'Landing Page berhasil diperbarui');
    }
}

