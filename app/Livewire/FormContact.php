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

        

       $result = Contact::firstOrCreate(
            [
                'name'=>$this->name,
                'email'=>$this->email
            ],
            [
                'phone'=>$this->phone 
            ]
        );
        
        //verificando se deu certo adicionar 

        if($result->wasRecentlyCreated){

              //limpando o formulario apos o registro
             //ele so limpa depois que der cero gravar porque assim o usuario pode ver o erro que ele cometeu o corrigir 
             
             $this->reset();

          
            
            $this->dispatch('contactAdded');
            $this->dispatch(
                'notification',
                type: 'success',
                title:'Contato cadastrado',
                position:'center'
            );

           
            
        }else{
            
             $this->dispatch(
                'notification',
                type: 'error',
                title:'Contato já existe',
                position:'center'
            );

        }

        

    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
