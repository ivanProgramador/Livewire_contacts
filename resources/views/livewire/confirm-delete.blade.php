<div class="text-center">

    <div class="text-center">
         <p>Você deseja excluir esse contato ?</p>
         <p><br><strong class="text-white">Nome  :  {{ $contact->name }}  </strong></p>
         <p><br><strong class="text-white">E-mail:  {{ $contact->email }} </strong></p>
         <p><br><strong class="text-white">Phone :  {{ $contact->phone }} </strong></p>
         <button wire:click="cancel" class="btn btn-danger px-5">Sim</button>
         <button wire:click="delete" class="btn btn-primary px-5">Não</button>

    </div>
    
</div>
