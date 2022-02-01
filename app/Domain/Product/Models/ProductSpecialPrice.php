<?php

namespace Domain\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecialPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'price',
        'date_start',
        'date_end'
    ];
}
