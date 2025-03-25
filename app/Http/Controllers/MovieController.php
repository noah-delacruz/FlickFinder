<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function search()
    {
        $validatedSearch = request()->validate([
            'query' => ['required']
        ]);

        $apiKey = config('services.tmdb.api_key');

        // dump(request()->all());
        // dump($apiKey);
        // dump($validatedSearch['query']);
        
        // $movies = Http::withToken($apiKey)->get('https://api.themoviedb.org/3/trending/movie/day?language=en-US')->json();
        $movies = Http::withToken($apiKey)->get('https://api.themoviedb.org/3/search/movie', [
            'query' => $validatedSearch['query'],
            'language' => 'en-US',
        ])->json();
        // dump($movies['total_results']);



        return view("results", [
            "movies" => $movies['results'],
            "total_results" => $movies['total_results'],
        ]);
    }

    public function trending()
    {
        // https://api.themoviedb.org/3/trending/movie/day?language=en-US

        $apiKey = config('services.tmdb.api_key');

        $movies = Http::withToken($apiKey)->get('https://api.themoviedb.org/3/trending/movie/day', [
            'language' => 'en-US',
        ])->json();

        return view("index", [
            "movies" => $movies['results'],
        ]);
    }

    public function favorites()
    {
        return view("favorites");
    }

    public function loadFavorites(Request $request)
    {
        $favorites = $request->input('favorites', []);
        return view('favorites', ['favorites' => $favorites]);
    }
}
