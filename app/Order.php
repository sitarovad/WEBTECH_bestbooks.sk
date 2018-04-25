<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total_price',
        'user_id',
        'shipping_id',
        'payment_id',
        'delivery_data_id',
    ];
}
