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

{{-- {{ dd($movie)}} --}}

<div class="max-w-sm rounded-lg overflow-hidden bg-white transform transition-transform duration-300 hover:scale-105">
    <img 
        class="w-full h-64 object-cover" 
        src="{{ $imageUrl }}" 
        alt="{{$movie["title"]}}"
    />
    <div class="px-6 py-4">
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