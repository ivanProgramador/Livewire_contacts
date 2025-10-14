<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class FormContact extends Component
{

   #[Validate('required|min:3|max:50') ]
    public $name;

   #[Validate('required|email|min:5|max:50') ]
    public $email;

   #[Validate('required|min:5|max:20')]
    public $phone;

    public function newContact(){

        $this->validate();

        

        Contact::firstOrCreate(
            [
                'name'=>$this->name,
                'email'=>$this->email
            ],
            [
                'phone'=>$this->phone 
            ]
        );
        
       
         
        //limpando o formulario apos o registro
        $this->reset();
        

    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
