@extends('layout')

@section('naglowek')
    Podkategorie
@endsection

@section('content')
 	@foreach ($podkategorie as $podkategoria)
	    <a href="/kategorie/{{ $kategoria }}/{{ $podkategoria->podkategoria }}"><h3>
	        {{ $podkategoria->podkategoria }}
	    </h3></a>
    @endforeach
@endsection