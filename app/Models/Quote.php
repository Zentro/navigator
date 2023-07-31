<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'purchase_datetime',
        'gallons_requested',
        'total_price',
        'price_per_gallon',
        'delivery_address',
        'delivery_date',
    ];

}
