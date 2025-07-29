  <x-main>
      <div class="px-4 py-5 my-5 ">
          <h1 class="display-5 text-center fw-bold text-body-emphasis">{{ $project['nome'] }}</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">

              <div class="col">
                  <x-card :project="$project" :isDetail="true" />
              </div>


          </div>
          <x-form>
              <p>Sei dentro il progetto {{ $project['nome'] }}, chiedi pure.</p>

              {{-- mettici tutto dentro una variabile chiamata = hidden --}}
              {{-- $hidden = <input type="hidden" name="project_id" value="{{ $project['id'] }}"> --}}
              <x-slot name="hidden">
                  <input type="hidden" name="project_id" value="{{ $project['id'] }}">
              </x-slot>


          </x-form>
      </div>
  </x-main>
