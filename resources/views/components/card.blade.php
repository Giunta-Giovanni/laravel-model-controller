<div class="movie-card">
    <div class="movie-title">{{ $title }}</div>
    <div class="movie-detail"><strong>Titolo Originale:</strong> {{ $original_title}}</div>
    <div class="movie-detail"><strong>Nazionalità:</strong> {{ $nationality }}</div>
    <div class="movie-detail"><strong>Data di uscita:</strong> {{ $date }}</div>
    <div class="movie-detail">
        <strong>Voto:</strong> 
        <span class="badge vote-badge">{{ $vote }}/10</span>
    </div>
    <div class="movie-detail mt-2">
        <small><strong>ID:</strong> {{ $id }}</small>
    </div>
</div>