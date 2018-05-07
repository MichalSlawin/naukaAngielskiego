@extends('layout')

@section('naglowek')
    Slowka
@endsection

@section('content')

 	<ul>
		@foreach ($slowka as $slowko)
		    <li>{{ $slowko->slowko }}</li>
	    @endforeach
    </ul>
    
@endsection

@section('redaktor')

	<a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/dodaj">
		<h3>Dodaj Słówko</h3>
	</a>

@endsection