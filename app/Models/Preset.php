<?php

namespace App\Models;

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
        'default_data',
        'description',
        'file_name'
    ];

    protected $casts = [
        'default_data' => 'array'
    ];

    public function weddings() : HasMany
    {
        return $this->hasMany(Wedding::class);
    }

    public function sections() : HasMany
    {
        return $this->hasMany(Section::class);
    }
    // public function weddings() : BelongsToMany
    // {
    //     return $this->belongsToMany(Wedding::class)->withPivot(['data'])->as('sections')->withTimestamps();
    // }
}
