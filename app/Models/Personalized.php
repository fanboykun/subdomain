<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Personalized extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_greeting_visible',
        'personalized_title',
        'personalized_description',
        'is_rsvp_visible',
        'going_text',
        'notgoing_text',
        'going_message',
        'notgoing_message',
        'last_check',
    ];

    protected $casts = [
        'is_rsvp_visible' => 'boolean',
        'last_check' => 'date:d-m-Y'
    ];

    public function wedding() : BelongsTo
    {
        return $this->belongsTo(Wedding::class);
    }

}
