<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach ($movies as $movie)
            <x-movie-card :movie="$movie"></x-movie-card>
        @endforeach
    </div>
    <div class="flex justify-center pt-6">
        <p class="text-white-700">
            {{$total_results}} total results
        </p>
    </div>
    
</x-layout>