<?php

use App\Livewire\Dashboard;
use App\Livewire\EditWeddingPreset;
use App\Livewire\Templates\IndexTemplate;
use App\Livewire\Wedding\AddWedding;
use App\Models\Wedding;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register main routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/invitation_route.php';

Route::view('/', 'welcome');

Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::get('templates',IndexTemplate::class)->name('templates.index');
    Route::get('templates/{preset:file_name}', function (\App\Models\Preset $preset) {
        if(!file_exists(resource_path('views/' . $preset->file_name. '.blade.php'))){
            return abort(404);
        }
        return view($preset->file_name, ['invitation' => []]);
    })->name('templates.view');

    Route::get('/{invitation:subdomain}/edit', EditWeddingPreset::class)->name('invitation.edit');
    Route::get('new-wedding', AddWedding::class)->name('invitation.create');

    Route::view('profile', 'profile')
        ->name('profile');
});


require __DIR__.'/auth.php';
