@extends('layout')

@section('naglowek')
	Tryb sprawdzania wiedzy
@endsection

@section('content')

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/sprawdzian/polAng">
		Pol->Ang
	</a></h3>
    
    <h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/sprawdzian/angPol">
		Ang->Pol
	</a></h3>
	
@endsection