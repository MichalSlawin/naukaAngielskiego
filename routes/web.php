<?php

Route::get('/', 'SlowkosController@welcome');

Route::get('/crud', 'SlowkosController@crud');

Route::get('/crud/create', 'SlowkosController@create');

Route::post('crud/storeCreate', 'SlowkosController@storeCreate');

Route::get('/crud/read', 'SlowkosController@read');

Route::get('/crud/update', 'SlowkosController@update');

Route::post('/crud/storeUpdate', 'SlowkosController@commitUpdate');

Route::get('/crud/delete', 'SlowkosController@delete');

Route::post('/crud/commitDelete', 'SlowkosController@commitDelete');

Route::get('about', 'SlowkosController@about');

Route::get('/kategorie', 'SlowkosController@showKategorie');

Route::get('/kategorie/{kategoria}', 'SlowkosController@showPodkategorie');

Route::get('/kategorie/{kategoria}/{podkategoria}', 'SlowkosController@showZestawy');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}', 'SlowkosController@showZestawOptions');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka', 'SlowkosController@showNauka');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/polAng', 'SlowkosController@showNaukaPolAng');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/polAng/alg1', 'SlowkosController@alg1PA');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/polAng/alg1/wynik', 'SlowkosController@alg1PAWynik');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/polAng/alg2', 'SlowkosController@alg2PA');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/polAng/alg2/wynik', 'SlowkosController@alg2PAWynik');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/angPol', 'SlowkosController@showNaukaAngPol');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/angPol/alg1', 'SlowkosController@alg1AP');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/angPol/alg1/wynik', 'SlowkosController@alg1APWynik');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/angPol/alg2', 'SlowkosController@alg2AP');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/nauka/angPol/alg2/wynik', 'SlowkosController@alg2APWynik');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/sprawdzian', 'SlowkosController@showSprawdzian');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/sprawdzian/polAng', 'SlowkosController@alg2PA');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/sprawdzian/angPol', 'SlowkosController@alg2AP');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/pokaz', 'SlowkosController@showSlowka');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/pokaz/dodaj', 'SlowkosController@addSlowko');

Route::post('/kategorie/{kategoria}/{podkategoria}/{zestaw}', 'SlowkosController@storeSlowka');