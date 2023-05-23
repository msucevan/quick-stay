<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'building_id',
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class, 'foreign_key');
    }
}