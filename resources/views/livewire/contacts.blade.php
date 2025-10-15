<div class="card p-5">
   <div class="d-flex justify-content-between mb-3">
      <div>
          <p class="mb-3">Contacts</p>
      </div>
      <div>
         <div class="d-flex gap-2 align-items-center">
            <span>Busca:</span>
            <input wire:model.live="search" type="text" class="form-control form-control-sm">
         </div>

      </div>
   </div>
   

    @if($contacts->count() === 0 )

      <div class="opacity-50"> Não existem contatos cadastrados </div>

    @else
        @foreach ($contacts as $contact)
           <div class="card p-3 mb-1 bg-dark">
             <div class="row">
                  <div class="col">Nome:     {{$contact->name}}</div>
                  <div class="col">E-mail:   {{$contact->email}}</div>
                  <div class="col">Telefone: {{$contact->phone}}</div>
                  <div class="col">
                    <a  class="btn btn-sm btn-warning" href="{{ route('contacts.edit',['id'=>$contact->id ]) }}">Editar</a>
                    <a class="btn btn-sm btn-danger" href="{{ route('contacts.delete',['id'=>$contact->id ]) }}">Deletar</a>
                    
                  </div>
             </div>
         </div>
       @endforeach
       <div>
          {{ $contacts->links() }}
       </div>
    @endif
   

 
</div>
