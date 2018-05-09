@extends('layout')

@section('naglowek')
	Wpisz słówko
@endsection

@section('redaktor')
	<form method="POST" action="/crud/storeCreate">
		{{ csrf_field() }}

		Po Polsku:<br>
		<input type="text" name="poPol">
		<br>
		Po Angielsku:<br>
		<input type="text" name="poAng">
		<br>
		Kategoria:<br>
		<input type="text" name="kategoria">
		<br>
		Podkategoria:<br>
		<input type="text" name="podkategoria">
		<br>
		Zestaw:<br>
		<input type="text" name="zestaw">
		<br><br>
		<input type="submit" value="Dodaj">
	</form> 
@endsection