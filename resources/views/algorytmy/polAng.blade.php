@extends('layout')

@section('naglowek')
	Pol->Ang
@endsection

@section('content')

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/polAng/alg1">
		Pytaj raz
	</a></h3>

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/polAng/alg2">
		Pytaj do skutku
	</a></h3>

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/polAng/alg3">
		Moj algorytm
	</a></h3>
	
@endsection