<?php

namespace App\Models;

use App\Enum\InvitationLanguage;
use App\Enum\StreamingPlatform;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdditionalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'language',
        'is_streaming_enabled',
        'streaming_platform',
        'is_has_instagram_filter',
        'instagram_filter_link',
        'streaming_link',
        'is_countdown_enabled',
        'quote'
    ];

    protected $casts = [
        'is_streaming_enabled' => 'boolean',
        'is_has_instagram_filter' => 'boolean',
        'is_countdown_enabled' => 'boolean',
        'language' => InvitationLanguage::class,
        'streaming_platform' => StreamingPlatform::class,
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

    public function song() : BelongsTo
    {
        return $this->belongsTo(Song::class);
    }

    public function protocol() : BelongsTo
    {
        return $this->belongsTo(Protocol::class);
    }

}
