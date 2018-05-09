<?php

namespace naukaAngielskiego\Http\Controllers;

use naukaAngielskiego\Slowko;

class SlowkosController extends Controller
{
	public function welcome() {
		return view('welcome');
	}

	public function crud() {
		return view('crud');
	}

	public function create() {
		return view('create');
	}

	public function read() {
		$slowka = Slowko::get();

		return $slowka;
	}

	public function update() {
		return view('update');
	}

	public function delete() {
		return view('delete');
	}

	public function about() {
		return view('about');
	}

	public function showKategorie() {
		$kategorie = Slowko::distinct()->get(['kategoria']);

    	return view('kategorie.index', compact('kategorie'));
	}

	public function showPodkategorie($kategoria) {
		$podkategorie = Slowko::where('kategoria', $kategoria)
		->distinct()->get(['podkategoria']);

    	return view('kategorie.podkategorie', compact('podkategorie'), compact('kategoria'));
	}

	public function showZestawy($kategoria, $podkategoria) {
		$zestawy = Slowko::where('kategoria', $kategoria)
		->where('podkategoria', $podkategoria)->distinct()->get(['zestaw']);

    	return view('kategorie.zestawy', compact('zestawy'), compact('kategoria', 'podkategoria'));
	}

	public function showZestawOptions($kategoria, $podkategoria, $zestaw) {
		return view('kategorie.zestaw', compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function showNauka($kategoria, $podkategoria, $zestaw) {
    	return view('kategorie.nauka', compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function showNaukaPolAng($kategoria, $podkategoria, $zestaw) {
    	return view('algorytmy.polAng', compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg1PA($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg1PA', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg1PAWynik($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg1PAWynik', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg2PA($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg2PA', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg2PAWynik($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg2PAWynik', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function showNaukaAngPol($kategoria, $podkategoria, $zestaw) {
		return view('algorytmy.angPol', compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg1AP($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg1AP', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg1APWynik($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg1APWynik', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg2AP($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg2AP', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function alg2APWynik($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get();

    	return view('algorytmy.alg2APWynik', compact('slowka'), 
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function showSprawdzian($kategoria, $podkategoria, $zestaw) {
    	return view('kategorie.sprawdzian', compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function showSlowka($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get(['slowko']);

    	return view('kategorie.slowka', compact('slowka'),
    		compact('kategoria', 'podkategoria', 'zestaw'));
	}

	public function addSlowko($kategoria, $podkategoria, $zestaw) {
		$slowka = Slowko::where('kategoria', $kategoria)->where('podkategoria', $podkategoria)
			->where('zestaw', $zestaw)->distinct()->get(['slowko']);

    	return view('kategorie.dodajSlowko', compact('slowka'),
    		compact('zestaw', 'kategoria', 'podkategoria'));
	}

	public function storeSlowka($kategoria, $podkategoria, $zestaw) {
		$slowko = new \naukaAngielskiego\Slowko;

		$poPol = request('poPol');
		$poAng = request('poAng');

		$dodawane = $poPol . ';' . $poAng;

		$slowko->kategoria = $kategoria;
		$slowko->podkategoria = $podkategoria;
		$slowko->zestaw = $zestaw;
		$slowko->slowko = $dodawane;

		$slowko->save();

		return $this->showSlowka($kategoria, $podkategoria, $zestaw);
	}

	public function storeCreate() {
		$slowko = new \naukaAngielskiego\Slowko;

		$poPol = request('poPol');
		$poAng = request('poAng');
		$kategoria = request('kategoria');
		$podkategoria = request('podkategoria');
		$zestaw = request('zestaw');

		$dodawane = $poPol . ';' . $poAng;

		$slowko->kategoria = $kategoria;
		$slowko->podkategoria = $podkategoria;
		$slowko->zestaw = $zestaw;
		$slowko->slowko = $dodawane;

		$slowko->save();

		return $this->read();
	}

	public function commitUpdate() {
		$id = request('id');
		$poPol = request('poPol');
		$poAng = request('poAng');
		$kategoria = request('kategoria');
		$podkategoria = request('podkategoria');
		$zestaw = request('zestaw');

		$dodawane = $poPol . ';' . $poAng;

		Slowko::where('id', (int)$id)->update(['kategoria'=>$kategoria,'podkategoria'=>$podkategoria,
			'zestaw'=>$zestaw,'slowko'=>$dodawane]);

		return $this->read();
	}

	public function commitDelete() {
		$id = request('id');
		$slowko = Slowko::find((int)$id);
		$slowko->delete();

		return $this->read();
	}
}
