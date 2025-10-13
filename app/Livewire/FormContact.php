<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class FormContact extends Component
{
    public $name,$email,$phone;

    public function newContact(){

        //validação de dados
        
        $this->Validate([
             "name"=>"required|min:3|max:50",
             "email"=>"required|email|min:5|max:50",
             "phone"=>"required|min:5|max:20"
        ]);

        //gravando os dados no log pra testes
        
        Log::info('Novo contato: '.$this->name.'-'.$this->email.'-'.$this->phone);

    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
