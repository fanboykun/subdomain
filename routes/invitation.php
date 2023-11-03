<?php

use App\Http\Controllers\WeddingPresetController;
use App\Http\Middleware\CheckWeddingExistance;
use App\Http\Middleware\PresetLayoutMiddleware;
use App\Livewire\EditWeddingPreset;
use App\Livewire\Presets\Elegant;
use App\Models\Wedding;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register invitation routes for your application. These
|
*/

// Route::group(['middleware' => PresetLayoutMiddleware::class, 'domain' => '{wedding:subdomain}.' .env('APP_URL',)], function(){
Route::group(['domain' => '{wedding:subdomain}.' .env('APP_URL'), 'middleware' => CheckWeddingExistance::class], function(){
    Route::get('/', WeddingPresetController::class)->name('wedding.home');

});
