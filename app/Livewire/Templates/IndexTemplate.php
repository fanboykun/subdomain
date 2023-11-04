<?php

namespace App\Livewire\Templates;

use App\Models\Preset;
use Livewire\Component;


class IndexTemplate extends Component
{
    public $presets;

    public function mount()
    {
        $this->presets = Preset::all();
    }

    public function render()
    {
        return view('livewire.templates.index-template');
    }

    public function open () : void
    {
        sleep(3);
        return ;
    }
}
