<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_picture_enabled',
        'pictures_link',
        'pictures_title',
        'is_video_enabled',
        'video_link',
        'video_title',
    ];

    protected $casts = [
        'is_picture_enabled' => 'boolean'
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

}
