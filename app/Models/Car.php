<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand_id',
        'name',
        'slug',
        'price',
        'year',
        'image',
        'description'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
