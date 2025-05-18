<div class="card my-3" style="width: 18rem;">
    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Immagine dell'articolo: {{ $article->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-subtitle">{{ $article->subtitle }}</p>
        @if ($article->category)
        <p class="small text-muted">Categoria:  <a href="{{ route('article.byCategory', $article->category) }}" class="text-capitalize text-muted">{{ $article->category->name }}</a></p>
        @else
        <p class="small text-muted">Nessuna categoria</p>
        @endif
        <p class="small text-muted my-0">
            @foreach ($article->tags as $tag)
                #{{ $tag->name }}
            @endforeach
        </p>
        <p class="card-subtitle text-muted fst-italic">tempo di lettura {{ $article->readDuration() }} min</p>
    </div>
    <div class="card-footer">
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-light p-0">
                <p>Redatto il {{ $article->created_at->format('d/m/Y') }}<br>da <a href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a></p>
                <div class="text-end"><a href="{{ route('article.show', $article) }}" class="btn primary-btn">Leggi</a></div>
            </li>
        </ul>
    </div>
</div>
