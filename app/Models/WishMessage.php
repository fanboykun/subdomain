<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WishMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'wish_sender_name',
        'wish_message',
        'is_selected'
    ];

    protected $casts = [
        'is_selected' => 'boolean'
    ];

    public function wedding() : BelongsTo
    {
        return $this->belongsTo(Wedding::class);
    }
}
