@extends('layout.main')

@section('content')


<div class="card-container d-flex flex-wrap justify-content-between gap-5">
@foreach ($movies as $movie)
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Name: {{$movie->title}}</h5>
      <p class="card-text">Original name: {{$movie->original_title}}</p>
      <p class="card-text">Nationality: {{$movie->nationality}}</p>
      <p class="card-text">Oficial Release: {{$movie->date}}</p>
      <p class="card-text">Popularity: {{$movie->vote}}</p>
    </div>
  </div>
@endforeach
</div>


@endsection
