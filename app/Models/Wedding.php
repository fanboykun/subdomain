<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wedding extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'preset_id', 'bride', 'groom', 'subdomain', 'date', 'status'];

    protected $casts = [
        'date' => 'date'
    ];

    public function fullSubDomain() : string
    {
        return route('wedding.home', ['wedding' => $this]);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function preset() : BelongsTo
    {
        return $this->belongsTo(Preset::class);
    }

    public function section() : HasOne
    {
        return $this->hasOne(Section::class);
    }
    // public function presets() : BelongsToMany
    // {
    //     return $this->belongsToMany(Preset::class)->withPivot(['data'])->as('sections')->withTimestamps();
    // }
}
