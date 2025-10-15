
<div class="container">
     <div class="row justify-content-center">
         <div class="col-sm-4">
              <h3>Editar contato</h3>
              <hr>
             <div class="card p-5">

              <form  wire:submit="updateContact">

                            <div class="mb-3">

                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" wire:model="name">
                                @error('name')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" wire:model="email">
                                @error('email')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control" id="phone" wire:model="phone">
                                @error('phone')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>

                            <div class="text-end">
                                <a href="{{ route('home') }}" class="btn btn-secondary px-5">Cancelar</a>
                                <button class="btn btn-warning px-5">Atualizar</button>
                            </div>

                            @if($error)
                            <div class="alert-danger text-center mt-5"
                                x-data="{ show:true}"
                                x-show="show"
                                x-init="setTimeout(()=> show = false, 2000)"
                            >
                                {{ $error }}
                            </div>
                            
                            @endif

                            
                            @if($success)
                            <div class="alert-success text-center mt-5"
                                x-data="{ show:true}"
                                x-show="show"
                                x-init="setTimeout(()=> show = false, 2000)"
                            >
                                {{ $success }}
                            </div>
                            @endif

              </form>

              @if(session()->has('error'))
                 <div class="alert alert-danger text-center mt-3">{{ session('error') }}</div>
              @endif
          </div>    
        </div>
     </div>
</div>

