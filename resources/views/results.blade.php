<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    @foreach ($movies as $movie)
        <x-movie-card></x-movie-card>
    @endforeach
</x-layout>