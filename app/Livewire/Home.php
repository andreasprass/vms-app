<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GuestVisit;
use Livewire\Attributes\Title;

#[Title('Dashboard')]

class Home extends Component
{

    public function render()
    {
         
        return view('livewire.dashboard');
    }
}
