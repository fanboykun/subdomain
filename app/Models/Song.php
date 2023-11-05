<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_name',
        'song_link'
    ];

    public function additionalInformation() : HasMany
    {
        return $this->hasMany(AdditionalInformation::class);
    }

}
