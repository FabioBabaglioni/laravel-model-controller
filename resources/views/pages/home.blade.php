@extends('layouts.main-layout')

@section('content')
<h1>Titoli dei film</h1>

@foreach ($movies as $movie)
<div>
    <h4>{{$movie['title']}}</h4>
    <div>Original title: {{$movie['original_title']}} </div>
    <div>nazionalità {{$movie['nationality']}}</div>
    <div>data uscita: {{$movie['date']}}</div>
    <div>Voto: {{$movie['vote']}}</div>
</div>
@endforeach

@endsection