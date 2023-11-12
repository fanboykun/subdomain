<?php

namespace App\Models;

use App\Enum\InvitationPlanningStep;
use App\Enum\InvitationStatus;
use App\Enum\InvitationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // shouldn't be fillable here, because it's relation ship, but let it be fillable for now
        'preset_id', // shouldn't be fillable here, because it's relation ship, but let it be fillable for now
        'subdomain',
        'main_wedding_date',
        'status', // enum value
        'type', // enum value
        'planning_step', // enum value
    ];

    protected $casts = [
        'main_wedding_date' => 'date',
        'status' => InvitationStatus::class,
        'type' => InvitationType::class,
        'planning_step' => InvitationPlanningStep::class,
    ];

    public function fullSubDomain() : string
    {
        return route('invitation.home', ['invitation' => $this]);
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
}
