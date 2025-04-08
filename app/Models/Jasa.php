<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jasa extends Model
{
    use HasFactory;
    protected $table = 'jasas'; // Sesuaikan dengan nama tabel di database
    protected $fillable = [
        'nama_jasa',
        'img_jasa',
        'no_whatsapp',
        'img_jasa'
    ];

}