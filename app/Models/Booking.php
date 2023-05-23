<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'customer_name',
        'customer_email',
        'customer_phone',
        'building_id'
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class, 'foreign_key');
    }
}