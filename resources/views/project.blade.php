  <x-main>
      <div class="px-4 py-5 my-5 text-center">
          <h1 class="display-5 fw-bold text-body-emphasis">{{ $project['nome'] }}</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">

              <div class="col">
                  <x-card :project="$project" />
              </div>


          </div>
      </div>

  </x-main>
