<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Protocol extends Model
{
    use HasFactory;

    protected $fillable = [
        'protocol_name',
        'protocol_thumbnail',
    ];

    public function additionalInformation() : HasMany
    {
        return $this->hasMany(AdditionalInformation::class);
    }

}
