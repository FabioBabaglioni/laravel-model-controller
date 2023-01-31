@extends('layouts.main-layout')

@section('content')

<div class="container-fluid text-center">
    <h1 class="py-4 text-danger">Titoli dei film</h1>

    <div class="d-flex flex-wrap pb-3 justify-content-center ">
        @foreach ($movies as $movie)
        <div class="ms_card p-3">
            <h4>{{$movie['title']}}</h4>
            <div>Original title: {{$movie['original_title']}} </div>
            <div>nazionalità {{$movie['nationality']}}</div>
            <div>data uscita: {{$movie['date']}}</div>
            <div>Voto: {{$movie['vote']}}</div>
        </div>
        @endforeach
    </div>
</div>



@endsection