<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StoryDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'story_subtitle',
        'story_description',
        'story_picture',
    ];

    public function story() : BelongsTo
    {
        return $this->belongsTo(Story::class);
    }

}
