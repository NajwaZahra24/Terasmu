<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FurniturDetail extends Model
{
    protected $table = 'furnitur_details';
    protected $fillable = [
        'furnitur_id','full_description','material','dimensi','berat','warna'
    ];

    public function furnitur()
    {
        return $this->belongsTo(Furnitur::class, 'furnitur_id');
    }
}
