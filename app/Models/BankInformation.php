<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name_holder',
        'bank_type',
        'account_number',
        'account_qrcode',
    ];

    public function wedding() : BelongsTo
    {
        return $this->belongsTo(Wedding::class);
    }

}
