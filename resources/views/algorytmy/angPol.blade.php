@extends('layout')

@section('naglowek')
	Ang->Pol
@endsection

@section('content')

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/angPol/alg1">
		Pytaj raz
	</a></h3>

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/angPol/alg2">
		Pytaj do skutku
	</a></h3>

	<!--<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/angPol/alg3">
		Moj algorytm
	</a></h3>-->
	
@endsection