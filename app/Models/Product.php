<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $hidden = ['id', 'created_ad', 'updated_at'];
    protected $fillable = [
        'name',
        'quantity',
        'price',
    ];
}
