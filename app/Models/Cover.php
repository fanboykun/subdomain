<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cover extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_logo_enabled',
        'cover_title',
        'cover_upper_text',
        'cover_lower_text',
        'cover_desktop',
        'cover_mobile',
    ];

    protected $casts = [
        'is_logo_enabled' => 'boolean'
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

}
