<?php

namespace App\Livewire;

use App\Models\Wedding;
use Livewire\Component;

class Dashboard extends Component
{
    public string $search = '';

    public function render()
    {
        $weddings = Wedding::where('subdomain', 'like', '%'.$this->search.'%')->with('preset', 'section')->latest()->get();
        return view('livewire.dashboard', ['weddings' => $weddings]);
    }
}
