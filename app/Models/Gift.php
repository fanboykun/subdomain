<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gift extends Model
{
    use HasFactory;

    protected $fillable = [
        'gift_title',
        'gift_description',
        'is_form_visible',
        'is_publicly_visible',
        'total_amount',
    ];

    protected $casts = [
        'is_form_visible' => 'boolean',
        'is_publicly_visible' => 'boolean'
    ];

    public function wedding() : BelongsTo
    {
        return $this->belongsTo(Wedding::class);
    }

    public function gifters() : HasMany
    {
        return $this->hasMany(Gifter::class);
    }

}
