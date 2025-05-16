<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Furnitur extends Model
{
    protected $table = 'furnitur';
    
    protected $fillable = [
        'name', 'category', 'price', 'original_price', 'label',
        'rating', 'rating_count', 'image_path', 'is_available'
    ];
}
