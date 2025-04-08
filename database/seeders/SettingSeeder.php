<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run()
    {
        Setting::create([
            'site_title' => 'UPJ School Store',
            'site_description' => 'Selamat datang di UPJ, tempat terbaik untuk membeli kebutuhan sekolah.',
            'hero_image' => 'hero.jpg', // Upload manual ke storage/app/public/
            'facebook' => 'https://facebook.com/upjschool',
            'instagram' => 'https://instagram.com/upjschool',
            'twitter' => 'https://twitter.com/upjschool'
        ]);
    }
}

