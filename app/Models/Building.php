<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'price',
        'bedrooms',
        'bathrooms',
        'amenities',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}