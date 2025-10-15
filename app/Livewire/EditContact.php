<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;

use Livewire\Component;

class EditContact extends Component
{

   #[Validate('required|min:3|max:50') ]
    public $name;

   #[Validate('required|email|min:5|max:50') ]
    public $email;

   #[Validate('required|min:5|max:20')]
    public $phone;

    public $error ="";
    public $success ="";

    public Contact $contact;

    public function mount($id){

        $this->contact = Contact::find($id);
        
        //se eu fizer isso logo no metodo mount os campos serão preenchidos
        //la no formaluario assim que componente for criado no DOM

        $this->name = $this->contact->name;
        $this->email = $this->contact->email;
        $this->phone = $this->contact->phone;

    }

    public function updateContact(){
        
        $this->validate();

        //verificando se o nome e eo email ja existem na base

        $contact = Contact::where('name',$this->name)->where('email',$this->email)->first();
        
    
        if($contact){
            session()->flash('error','o contato já existe');
            return;
        }

        //atualizando 

        $this->contact->update([
            'name'=> $this->name,
            'email'=> $this->email,
            'phone'=> $this->phone
        ]);

        return redirect()->route('home');

    }


    public function render()
    {
        return view('livewire.edit-contact');
    }
}
