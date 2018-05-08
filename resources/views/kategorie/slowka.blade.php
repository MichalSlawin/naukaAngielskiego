@extends('layout')

@section('content')

 	<ul>
		@foreach ($slowka as $slowko)
			<?php
				$toFind = ';';
				$endPos = strpos($slowko->slowko, $toFind);
				$poPol = substr($slowko->slowko, 0, (int)$endPos);

				$poAng = substr($slowko->slowko, (int)$endPos+1);
			?>

		    <li>{{ $poPol }} - {{ $poAng }}</li>

	    @endforeach
    </ul>
    
@endsection

@section('redaktor')

	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/pokaz/dodaj">
		Dodaj Słówko
	</a></h3>

@endsection