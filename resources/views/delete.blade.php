@extends('layout')

@section('naglowek')
	Wpisz słówko
@endsection

@section('redaktor')
	<form method="POST" action="/crud/commitDelete">
		{{ csrf_field() }}

		ID:<br>
		<input type="text" name="id">
		<br><br>
		<input type="submit" value="Usuń">
	</form> 
@endsection