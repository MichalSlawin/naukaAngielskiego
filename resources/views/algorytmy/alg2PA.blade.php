@extends('layout')

@section('content')

	<?php 
		$slowkaTab = array();
		foreach($slowka as $slowko) {
			$slowkaTab[] = $slowko->slowko;
		}
		shuffle($slowkaTab);
	?>

	<form method="GET" action="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/polAng/alg2/wynik">
		@foreach ($slowkaTab as $slowko)
			<?php
				$toFind = ';';
				$endPos = strpos($slowko, $toFind);
				$poPol = substr($slowko, 0, (int)$endPos);
				$poAng = substr($slowko, (int)$endPos+1);
			?>

		    {{ $poPol }} - <input type="text" name="{{ $poAng }}" required>

		    <br>

	    @endforeach

		<br><br>
		<input type="submit" value="Sprawdź">
	</form>
    
@endsection