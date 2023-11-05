<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_title', 'event_description', 'event_date'];

    protected $casts = [
        'event_date' => 'date'
    ];

    public function wedding() : BelongsTo
    {
        return $this->belongsTo(Wedding::class);
    }
}
