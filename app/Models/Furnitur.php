<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Furnitur extends Model
{
    protected $table = 'furnitur';
    
    protected $fillable = [
        'name', 'category', 'price', 'original_price', 'label',
        'rating', 'rating_count', 'image_path', 'is_available'
    ];

    // Add this relationship
    public function detail(): HasOne
    {
        return $this->hasOne(FurniturDetail::class, 'furnitur_id');
    }

}
