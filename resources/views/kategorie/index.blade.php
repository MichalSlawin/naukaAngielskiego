@extends('layout')

@section('naglowek')
    Kategorie
@endsection

@section('content')
    @foreach ($kategorie as $kategoria)
        <a href="kategorie/{{ $kategoria->kategoria }}"><h3>
            {{ $kategoria->kategoria }}
        </h3></a>
    @endforeach
@endsection