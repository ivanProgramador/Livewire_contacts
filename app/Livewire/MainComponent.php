<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class MainComponent extends Component
{
    #[Title('Livewire contacts')]
    
    public function render()
    {
        return view('livewire.main-component');
    }
}
