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
        'invitation_id',
        'data'
    ];

    protected $casts = [
        'data' => 'array'
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }

    public function preset() : BelongsTo
    {
        return $this->belongsTo(Preset::class);
    }
}
