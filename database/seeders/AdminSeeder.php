<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
         User::create([
            'name' => 'Iqbal Hasan',
            'email' => 'iqbalhasan15@gmail.com',
            'password' => Hash::make('iqbal1015'), // Ganti dengan password yang aman
            'is_admin' => true,
        ]);
    }
}
