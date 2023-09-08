<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'food_item',
        'quantity',
        'ordered_date',
        'ordered_time',
        'delivery_date',
        'delivery_time',
        'order_status'

    ];
}
