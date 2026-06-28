<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'name',
        'slug',
        'price',
        'year',
        'image',
        'description',
        'status',
        'transmission',
        'mileage'
    ];

    // Pastikan tipe data konsisten saat diakses dari PHP
    protected $casts = [
        'price'     =>  'decimal:2', // tidak ada floating-point noise
        'year'      =>  'integer',
        'mileage'   =>  'integer' // migration: unsignedInteger
    ];

    // Route model binding: /cars/{car:slug}
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Label status dalam Bahasa Indonesia dan Penggunaan $car->status_label
    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'available' =>  'Tersedia',
            'sold'      =>  'Terjual',
            default     =>  ucfirst($this->status)
        };
    }

    // Format harga ke Rupiah (contoh: Rp 500.000.000) dan Penggunaan $car->price_formatted
    public function getPriceFormattedAttribute(): string
    {
        return 'Rp ' . number_format((float) $this->price, 0, ',', '.');
    }
}
