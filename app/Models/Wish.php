<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wish extends Model
{
    use HasFactory;

    protected $fillable = [
        'wish_title',
        'wish_description',
        'is_publicly_visible',
        'is_review_enabled',
    ];

    protected $casts = [
        'is_publicly_visible' => 'boolean',
        'is_review_enabled' => 'boolean'
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }
}
