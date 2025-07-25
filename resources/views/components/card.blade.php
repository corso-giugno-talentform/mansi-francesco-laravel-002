<div class="card">
    <div class="card-body">

        <img src="{{ $project['image'] }}" alt="">
        <h5 class="card-title">{{ $project['nome'] }}</h5>
        <p class="card-text testo-di-prova-rosso">{{ $project['descrizione'] }}</p>
        <a href="{{ route('project', ['project' => $project['slug']]) }}" class="btn btn-primary">Dettagli</a>
        {{-- <a href="/progetti/{{ $project['slug'] }}" class="btn btn-primary">Dettagli</a> --}}
    </div>
</div>
