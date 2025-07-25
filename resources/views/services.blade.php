  <x-main>
      <div class="px-4 py-5 my-5 text-center">
          <h1 class="display-5 fw-bold text-body-emphasis">I Mie Servizi</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">
              @foreach ($services as $service)
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">{{ $service }}</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                  to
                                  additional content. This content is a little bit longer.</p>

                              <a href="{{ route('service', ['service' => $service]) }}"
                                  class="btn btn-primary">Dettagli</a>
                          </div>
                      </div>
                  </div>
              @endforeach

          </div>
      </div>
      <div class="px-4 py-5 my-5 text-center">
          <h1 class="display-5 fw-bold text-body-emphasis">I Mie Progetti</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">
              @foreach ($projects as $project)
                  <div class="col">

                      <x-card :project="$project" :isDetail="false" />
                  </div>
              @endforeach

          </div>
      </div>
  </x-main>
