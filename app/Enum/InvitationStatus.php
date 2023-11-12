<?php

namespace App\Enum;

enum InvitationStatus:string
{
    // variables for enumerate goes here
    // example enum is in line below
    // go make something brrr

    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case FROZED = 'frozen';

}
