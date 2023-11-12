<?php

namespace App\Models;

use App\Enum\GuestStatus;
use App\Enum\GuestType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_name',
        'guest_email',
        'guest_phone',
        'guest_type',
        'guest_status',
        'guest_amount',
        'code'
    ];

    protected $casts = [
        'guest_type' => GuestType::class,
        'guest_status' => GuestStatus::class,
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }
}
