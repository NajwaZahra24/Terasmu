<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'produk_id',
        'first_name',
        'last_name',
        'address',
        'phone',
        'email',
        'order_date',
        'product_name',
        'quantity',
        'subtotal',
        'total',
        'payment_method',
    ];
    
}
