<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakePreset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'preset:make {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Preset';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "creating view with ". $this->argument('name'). " name". "\n";
        // Artisan::call('livewire:make', ['name' => "Presets/".$this->argument('name')]);
        // echo "done creating livewire component". "\n";

    }
}
