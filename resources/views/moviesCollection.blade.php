@extends('layouts.app')

@section('title', 'MoviesCollection')

@section('content')
    <ul>
        @foreach ($movies as $index => $movie)
            <li>
                <a href="{{ route('movie-detail-page', ['id' => $movie['id']]) }}">{{$movie['title']}}</a>
            </li>
        @endforeach
    </ul>
@endsection