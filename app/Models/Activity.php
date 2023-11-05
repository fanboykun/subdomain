<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_date',
        'activity_title',
        'activity_description',
        'start_time',
        'finish_time',
        'is_main_event',
        'is_publicly_visible',
        'is_map_visible',
        'google_map_pin',
        'address_location',
        'place_location',
        'city_location',
    ];

    protected $casts = [
        'activity_date' => 'date:d-m-Y',
        'start_time' => 'time:H-i',
        'finish_time' => 'time:H-i'
    ];

    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

}
