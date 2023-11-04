<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['guest_name', 'guest_email', 'guest_phone', 'guest_type', 'guest_status', 'guest_amount', 'code'];

    public function wedding() : BelongsTo
    {
        return $this->belongsTo(Wedding::class);
    }
}
