<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products'; // Sesuaikan dengan nama tabel di database
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'whatsapp_number'
    ];
}
