<div class="card p-5">

     <form  wire:submit="newContact">

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
            <button class="btn btn-secondary px-5">Gravar</button>
        </div>
    </form>

    <script>

       window.addEventListener('notification',(event)=>{

           let data = event.detail;

            Swal.fire({
            position: data.position
            title: data.title,
            text: 'Do you want to continue',
            icon: data.type,
            confirmButtonText: 'Cool'
           })
       });
       
    </script>
</div>