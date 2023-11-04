<?php

namespace App\Enum;

enum GuestStatus:string
{
    case NEW = 'new';
    case OPENED = 'openend';
    case INVITED = 'invited';
    case GOING = 'going';
    case NOT_GOING = 'not_going';
}
