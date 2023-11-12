<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingPresetController extends Controller
{
    public function __invoke(Request $request, Invitation $invitation)
    {
        $invitation->load(['preset', 'section']);
        if(!file_exists(resource_path('views/' . $invitation->preset->file_name. '.blade.php'))){
            return abort(404);
        }
        return view($invitation->preset->file_name, ['invitation' => $invitation]);
    }
}
