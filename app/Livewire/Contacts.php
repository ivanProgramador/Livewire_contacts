<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;

    #[On('contactAdded')]

    public function updateContactList(){}

   

    public function render()
    {
        return view('livewire.contacts')->with('contacts',Contact::paginate(5));
    }
}
