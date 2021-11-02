<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieDetailController extends Controller
{
    public function moviesCollection() {
        $movies = Movie::all();
        return view('moviesCollection', compact('movies'));
    }

    public function movieDetail($id) {
        $movie = Movie::where('id', $id)->first();
        return view('movieDetail', compact('movie'));
    }
}
