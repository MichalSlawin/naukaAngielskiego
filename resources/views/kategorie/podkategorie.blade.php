@extends('layout')

@section('naglowek')
    Podkategorie
@endsection

@section('content')
 	@foreach ($podkategorie as $podkategoria)
	    <h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria->podkategoria }}">
	        {{ $podkategoria->podkategoria }}
	    </a></h3>
    @endforeach
@endsection