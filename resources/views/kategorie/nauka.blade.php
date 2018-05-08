@extends('layout')

@section('naglowek')
    Tryb nauki
@endsection

@section('content')

 	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/pokaz">
		Pokaż słówka
	</a></h3>

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/polAng">
		Pol->Ang
	</a></h3>
    
    <h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/angPol">
		Ang->Pol
	</a></h3>

@endsection