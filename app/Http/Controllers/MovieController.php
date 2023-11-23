<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Movie $movie)
    {
        return view('movies/list', [ 'movieslist' => $movie -> all() ]);
    }
    
    public function show($id)
    {
        echo "The details for the movies $id are not ready";
        die();
    }
}
