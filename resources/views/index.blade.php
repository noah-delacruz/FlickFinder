<x-layout>
    <x-page-heading>Search For A Movie</x-page-heading>
    <x-form></x-form>

    <div class="mt-10"></div>
    <x-page-heading class="mt-6">Trending Movies</x-page-heading>

    <div class="grid lg:grid-cols-3 gap-8">
        @foreach ($movies as $movie)
            <x-movie-card :movie="$movie"></x-movie-card>
        @endforeach
    </div>
</x-layout>