<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OpeningCover extends Model
{
    use HasFactory;

    protected $fillable = [
        'opening_cover_title',
        'opening_cover_body',
        'opening_cover_button_text',
        'opening_cover_desktop',
        'opening_cover_mobile',
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

}
