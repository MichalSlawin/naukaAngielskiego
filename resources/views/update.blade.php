@extends('layout')

@section('naglowek')
	Wpisz słówko
@endsection

@section('redaktor')
	<form method="POST" action="/crud/storeUpdate">
		{{ csrf_field() }}

		ID:<br>
		<input type="text" name="id">
		<br>
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
		<input type="submit" value="Zmień">
	</form> 
@endsection