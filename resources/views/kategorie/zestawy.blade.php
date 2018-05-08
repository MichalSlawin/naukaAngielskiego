@extends('layout')

@section('naglowek')
    {{ $podkategoria }}
@endsection

@section('content')
 	@foreach ($zestawy as $zestaw)
	        
	    <h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw->zestaw }}">
	        Zestaw nr {{ $zestaw->zestaw }}
	    </a></h3>
    @endforeach
@endsection