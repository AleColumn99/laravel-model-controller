@extends('layouts.main')

@section('content')

    <h1>BOOM</h1>

    <ul>

        @foreach ($movies as $movie)

            <li>
                {{ $movie['title'] }}
            </li>

        @endforeach
    
    </ul>

@endsection