<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingPresetController extends Controller
{
    public function __invoke(Request $request, Wedding $wedding)
    {
        $wedding->load(['preset', 'section']);
        if(!file_exists(resource_path('views/' . $wedding->preset->file_name. '.blade.php'))){
            return abort(404);
        }
        return view($wedding->preset->file_name, ['wedding' => $wedding]);
    }
}
