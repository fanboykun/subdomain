<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wedding extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'preset_id',
        'bride',
        'groom',
        'subdomain',
        'date',
        'status'
    ];

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

    public function guests() : HasMany
    {
        return $this->hasMany(Guest::class);
    }

    public function events() : HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function bridegroom() : HasOne
    {
        return $this->hasOne(Bridegroom::class);
    }

    public function personalized() : HasOne
    {
        return $this->hasOne(Personalized::class);
    }

    public function additionalInformation() : HasOne
    {
        return $this->hasOne(AdditionalInformation::class);
    }

    public function wish() : HasOne
    {
        return $this->hasOne(Wish::class);
    }

    public function wishMessages() : HasMany
    {
        return $this->hasMany(WishMessage::class);
    }

    public function gallery() : HasOne
    {
        return $this->hasOne(Gallery::class);
    }

    public function cover() : HasOne
    {
        return $this->hasOne(Cover::class);
    }

    public function openingCover() : HasOne
    {
        return $this->hasOne(OpeningCover::class);
    }

    public function gift() : HasOne
    {
        return $this->hasOne(Gift::class);
    }

    public function bankInformation() : HasMany
    {
        return $this->hasMany(BankInformation::class);
    }

    public function gifters() : HasMany
    {
        return $this->hasMany(Gifter::class);
    }

    public function story() : HasOne
    {
        return $this->hasOne(Story::class);
    }

    public function storyDetail() : HasMany
    {
        return $this->hasMany(StoryDetail::class);
    }

}
