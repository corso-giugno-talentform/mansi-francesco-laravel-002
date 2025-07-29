   <div class="container px-4 py-5 my-5">
       <div class="col-lg-6 mx-auto">
           @if (session('success'))
               <x-alert color="alert-success"> {{ session('success') }}</x-alert>
           @endif

           {{-- @session('success')
               {{ session('success') }}
           @endsession --}}
           @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
           {{ $slot }}
           <form class="" action="{{ route('send') }}" method="POST">
               @csrf
               {{-- {{ isset($hidden) ? $hidden : '' }} --}}
               {{ $hidden ?? '' }}
               <div class="mb-3">
                   <label for="inputName" class="form-label">Nome</label>
                   <input type="text" class="form-control @error('firstname') is-invalid    @enderror" id="inputName"
                       name="firstname" value="{{ old('firstname') }}">


               </div>
               <div class="mb-3">
                   <label for="inputSurName" class="form-label">Cognome</label>
                   <input type="text" class="form-control" id="inputSurName" name="lastname"
                       value="{{ old('lastname') }}">
                   @error('lastname')
                       <div class="alert alert-danger mt-2" role="alert">
                           {{ $message }}
                       </div>
                   @enderror
               </div>
               <div class="mb-3">
                   <label for="inputEmail" class="form-label">Email</label>
                   <input type="email" class="form-control" id="inputEmail" name="email"
                       value="{{ old('email') }}">
                   @error('email')
                       <div class="alert alert-danger mt-2" role="alert">
                           {{ $message }}
                       </div>
                   @enderror
               </div>
               <div class="mb-3">
                   <label for="FormControlTextarea" class="form-label">Messaggio</label>
                   <textarea class="form-control" id="FormControlTextarea1" rows="3" name="message">{{ old('message') }}</textarea>
                   @error('message')
                       <div class="alert alert-danger mt-4" role="alert">
                           {{ $message }}
                       </div>
                   @enderror
               </div>

               <button type="submit" class="btn btn-primary">Invia</button>
           </form>
       </div>
   </div>
