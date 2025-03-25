<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach ($movies as $movie)
            <x-movie-card :movie="$movie"></x-movie-card>
        @endforeach
    </div>
</x-layout>