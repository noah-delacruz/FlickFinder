@props(["movie"])

@php
    $imageUrl = "";
    if(! $movie['backdrop_path']) {
        $imageUrl = "https://picsum.photos/500";
    }
    else {
        $imageUrl = "https://image.tmdb.org/t/p/w500/" . $movie['backdrop_path'];
    }
@endphp

<script>
    function toggleFavorite(movie) {
        if (!movie || !movie.id) {
            console.error('Invalid movie object:', movie);
            return;
        }

        const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        const index = favorites.findIndex(curr => curr.id === movie.id);

        const button = document.querySelector(`.favorite-btn-{{ $movie['id']}}`);
        console.log(button)

        if (index === -1) {
            // Add to favorites
            favorites.push(movie);
            console.log(`Added "${movie.title}" to favorites.`);
            alert("Added to Favorites");
        } else {
            // Remove from favorites
            favorites.splice(index, 1);
            console.log(`Removed "${movie.title}" from favorites.`);
            alert("Removed from Favorites");
        }

        localStorage.setItem('favorites', JSON.stringify(favorites));
    }


</script>

<div class="max-w-sm rounded-lg overflow-hidden bg-white transform transition-transform duration-300 hover:scale-105">
    <img 
        class="w-full h-64 object-cover" 
        src="{{ $imageUrl }}" 
        alt="{{$movie["title"]}}"
    />
    
    <div class="px-6 py-4">
        <button 
            onClick="toggleFavorite({{json_encode($movie)}})"
            class="favorite-btn text-base text-gray-700"
        >
            ❤️ Add to favorites
        </button>
        <div class="font-bold text-xl mb-2 text-gray-800">
            {{$movie["title"]}}
        </div>
        <p class="text-gray-700 text-base line-clamp-3 mb-2">
            {{$movie["overview"]}}
        </p>
        <p class="text-gray-700 text-base line-clamp-3 mb-2">
            {{$movie["release_date"]}}
        </p>
        
    </div>
    
</div>