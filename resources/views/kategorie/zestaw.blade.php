@extends('layout')

@section('naglowek')
    Zestaw nr {{ $zestaw }}
@endsection

@section('content')

	<h3><a href= "/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka">
		Tryb nauki
	</a></h3>

	<h3><a href= "/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/sprawdzian">
		Tryb sprawdzania wiedzy
	</a></h3>
    
@endsection