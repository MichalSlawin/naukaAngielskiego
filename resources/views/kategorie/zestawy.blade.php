@extends('layout')

@section('naglowek')
    {{ $podkategoria }}
@endsection

@section('content')
 	@foreach ($zestawy as $zestaw)
	        
	    <a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw->zestaw }}"><h3>
	        Zestaw nr {{ $zestaw->zestaw }}
	    </h3></a>
    @endforeach
@endsection