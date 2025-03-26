<x-layout>
    <x-page-heading>Favorite Movies</x-page-heading>
    <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @if (!empty($favorites))
            @foreach ($favorites as $movie)
                <x-movie-card :movie="$movie"></x-movie-card>
            @endforeach
        @else
            <p>No favorite movies found.</p>
        @endif
    </div>
    
</x-layout>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const favorites = JSON.parse(localStorage.getItem('favorites')) || [];

        fetch('/favorites/load', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ favorites })
        })
        .then(response => response.text())
        .then(html => {
            document.body.innerHTML = html; // Reload the page with the favorites rendered from the server
        })
        .catch(error => console.error('Error:', error));
    });
</script>