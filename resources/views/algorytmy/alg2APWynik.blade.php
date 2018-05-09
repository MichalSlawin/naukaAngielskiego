@extends('layout')

@section('naglowek')
	Wynik
@endsection

@section('content')

		<?php $ileZle = 0; ?>

		@foreach ($slowka as $slowko)

			<?php
				$toFind = ';';
				$endPos = strpos($slowko->slowko, $toFind);
				$poPol = substr($slowko->slowko, 0, (int)$endPos);
				$poAng = substr($slowko->slowko, (int)$endPos+1);
				$odp = $_GET["$poPol"];
			?>

		    <?php if ($poPol != $odp)
				$ileZle++;
			?>

	    @endforeach

    <?php if ($ileZle > 0): ?>
    	<font color="red">Źle.</font>
    	<h3><a href="/kategorie/{{ $kategoria }}/{{ $podkategoria }}/{{ $zestaw }}/nauka/angPol/alg2">
			Powtorz
		</a></h3>
	<?php else: ?>
		<font color="green">Dobrze!<br>Gratulacje!</font>
	<?php endif; ?>
    
@endsection


