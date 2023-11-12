<?php

namespace App\Enum;

enum InvitationPlanningStep:string
{
    // variables for enumerate goes here
    // example enum is in line below
    // go make something brrr

    case NOT_YET_ENGAGED = 'not_yet_engaged';
    case NEWLY_ENGAGED = 'newly_engaged';
    case ALREADY_PLANNING = 'already_planning';
    case ALMOST_DONE = 'almost_done';

}
