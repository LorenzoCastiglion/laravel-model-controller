@extends('layouts.app')

@section('cards')
<ul>
    @foreach ($movies as $movie)

    <li>{{$movie->title}}</li>
        
    @endforeach
</ul>
@endsection
