<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function search()
    {
        dump(request()->all());
        return view("results", [
            "movies" => [],
        ]);
    }
}
