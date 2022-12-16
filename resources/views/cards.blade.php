@extends('layouts.app')

@section('cards')


 <div class="row justify-content-center gap-3 ">
     @foreach ($movies as $movie)
     <div class="card p-0" style="width: 18rem;">
        <div class="img-cont">
            <img src="{{$movie->image}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h3 class="card-text">{{$movie->title}}</h3>
          <p>{{$movie->original_title}}</p>
          <p>{{$movie->date}}</p>
        </div>
      </div>       
     @endforeach
 </div>

@endsection
