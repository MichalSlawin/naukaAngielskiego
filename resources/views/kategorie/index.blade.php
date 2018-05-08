@extends('layout')

@section('naglowek')
    Kategorie
@endsection

@section('content')
    @foreach ($kategorie as $kategoria)
        <h3><a href="kategorie/{{ $kategoria->kategoria }}">
            {{ $kategoria->kategoria }}
        </a></h3>
    @endforeach
@endsection