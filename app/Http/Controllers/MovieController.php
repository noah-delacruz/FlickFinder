<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function search()
    {
        $apiKey = config('services.tmdb.api_key');
        // dump(request()->all());
        // dump($apiKey);

        $validatedSearch = request()->validate([
            'query' => ['required']
        ]);

        return view("results", [
            "movies" => [],
        ]);
    }
}
