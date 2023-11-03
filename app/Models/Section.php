<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'preset_id',
        'wedding_id',
        'data'
    ];

    protected $casts = [
        'data' => 'array'
    ];

    public function wedding() : BelongsTo
    {
        return $this->belongsTo(Wedding::class);
    }

    public function preset() : BelongsTo
    {
        return $this->belongsTo(Preset::class);
    }
}
