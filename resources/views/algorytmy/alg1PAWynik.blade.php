@extends('layout')

@section('naglowek')
	Wynik
@endsection

@section('content')

	<ul>
		@foreach ($slowka as $slowko)

			<?php
				$toFind = ';';
				$endPos = strpos($slowko->slowko, $toFind);
				$poPol = substr($slowko->slowko, 0, (int)$endPos);
				$poAng = substr($slowko->slowko, (int)$endPos+1);
				$odp = $_GET["$poAng"];
			?>

		    <li>{{ $poPol }} - {{ $odp }}</li>
		    <?php if ($poAng == $odp): ?>
		    	<font color="green">Dobrze!</font>
			<?php else: ?>
				<font color="red">Źle.</font>
			<?php endif; ?>

	    @endforeach
    </ul>
    
@endsection


