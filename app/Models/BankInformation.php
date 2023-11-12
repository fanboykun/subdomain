<?php

namespace App\Models;

use App\Enum\BankType;
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

    protected $casts = [
        'bank_type' => BankType::class,
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

}
