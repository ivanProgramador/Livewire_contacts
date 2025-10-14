<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ConfirmDelete extends Component
{
    public Contact $contact; 

    public function mount($id){

        $this->contact = Contact::findOrFail($id);
    }

    public function cancel(){
         return redirect()->route('home');
    }

    public function delete(){

         $this->contact->delete();
         
         return redirect()->route('home');
    }


    public function render()
    {
        return view('livewire.confirm-delete');
    }
}
