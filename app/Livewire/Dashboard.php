<?php

namespace App\Livewire;

use App\Models\Invitation;
use App\Models\Wedding;
use Livewire\Component;

class Dashboard extends Component
{
    public string $search = '';

    public function render()
    {
        $invitations = Invitation::where('subdomain', 'like', '%'.$this->search.'%')->with('preset', 'section')->latest()->get();
        return view('livewire.dashboard', ['invitations' => $invitations]);
    }
}
