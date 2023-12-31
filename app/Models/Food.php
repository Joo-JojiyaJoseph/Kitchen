<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_name' ,
        'food_ingredient',
        'f_ingredient_quantity' ,
        'food_status',
    ];

}
