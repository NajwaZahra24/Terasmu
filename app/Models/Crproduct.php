<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crproduct extends Model
{
    // Secara default, Laravel akan menganggap nama tabelnya 'crproducts',
    // jadi kita harus tentukan nama tabel secara eksplisit:
    protected $table = 'crproduct';

    // Field yang boleh diisi massal (fillable)
    protected $fillable = [
        'name',
        'category',
        'price',
        'original_price',
        'label',
        'rating',
        'rating_count',
        'image_path',
        'is_available',
    ];
}
