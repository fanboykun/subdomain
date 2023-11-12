<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gifter extends Model
{
    use HasFactory;

    protected $fillable = [
        'gifter_name',
        'gifter_account_name',
        'gift_message',
        'amount',
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

    public function bankInfo() : BelongsTo
    {
        return $this->belongsTo(BankInformation::class);
    }
}
