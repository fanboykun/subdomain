<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bridegroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'bride',
        'groom',
        'main_bride_picture',
        'main_groom_picture',
        'bride_instagram',
        'groom_instagram',
        'bride_bio',
        'groom_bio',
        'is_parent_name_visible',
        'bride_father_name',
        'bride_mother_name',
        'groom_father_name',
        'groom_mother_name',
    ];

    protected $casts = [
        'is_parent_name_visible' => 'boolean'
    ];

    public function invitation() : BelongsTo
    {
        return $this->belongsTo(Invitation::class);
    }
}
