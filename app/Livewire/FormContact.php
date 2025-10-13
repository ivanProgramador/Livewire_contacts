<?php

namespace App\Livewire;

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

        //gravando os dados no log pra testes
        
        Log::info('Novo contato: '.$this->name.'-'.$this->email.'-'.$this->phone);

        //limpando dados  apos o registro

        //forma 1
        /*
           $this->name = '';
           $this->email = '';
           $this->phone ='';
        */

        //forma 2 

        $this->reset();
        

    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
