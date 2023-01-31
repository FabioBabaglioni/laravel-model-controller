@extends('layouts.main-layout')

@section('content')
<h1>Titoli dei film</h1>

<ul>
    <li>
        {{$movies.title}}
    </li>
</ul>
@endsection