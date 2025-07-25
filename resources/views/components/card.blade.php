<div class="card">
    <div class="card-body">
        <img src="{{ $project['image'] }}" alt="">
        @if (!$isDetail)
            <h5 class="card-title">{{ $project['nome'] }}</h5>
        @endif
        <p class="card-text testo-di-prova-rosso">{{ $project['descrizione'] }}</p>
        @if (!$isDetail)
            <a href="{{ route('project', ['project' => $project['slug']]) }}" class="btn btn-primary">Dettagli</a>
        @endif
        {{-- <a href="/progetti/{{ $project['slug'] }}" class="btn btn-primary">Dettagli</a> --}}
    </div>

</div>
