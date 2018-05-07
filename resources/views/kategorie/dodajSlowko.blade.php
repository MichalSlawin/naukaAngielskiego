@extends('layout')

@section('naglowek')
	Wpisz słówko
@endsection

@section('redaktor')
	<form method="POST" action="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}">
		{{ csrf_field() }}

		Po Polsku:<br>
		<input type="text" name="poPol">
		<br>
		Po Angielsku:<br>
		<input type="text" name="poAng">
		<br><br>
		<input type="submit" value="Dodaj">
	</form> 
@endsection