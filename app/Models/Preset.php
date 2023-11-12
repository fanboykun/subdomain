<?php

namespace App\Models;

use App\Enum\PresetType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Preset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file_name',
        'thumbnail',
        'type',
        'color_pallete',
        'default_data',
        'description',
    ];

    protected $casts = [
        'default_data' => 'array',
        'type' => PresetType::class,
    ];

    public function invitations() : HasMany
    {
        return $this->hasMany(Invitation::class);
    }

    public function sections() : HasMany
    {
        return $this->hasMany(Section::class);
    }
    // public function invitations() : BelongsToMany
    // {
    //     return $this->belongsToMany(Wedding::class)->withPivot(['data'])->as('sections')->withTimestamps();
    // }
}
