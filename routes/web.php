<?php

Route::get('/', 'SlowkosController@welcome');

Route::get('about', 'SlowkosController@about');

Route::get('/kategorie', 'SlowkosController@showKategorie');

Route::get('/kategorie/{kategoria}', 'SlowkosController@showPodkategorie');

Route::get('/kategorie/{kategoria}/{podkategoria}', 'SlowkosController@showZestawy');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}', 'SlowkosController@showSlowka');

Route::get('/kategorie/{kategoria}/{podkategoria}/{zestaw}/dodaj', 'SlowkosController@dodajSlowko');

Route::post('/kategorie/{kategoria}/{podkategoria}/{zestaw}', 'SlowkosController@storeSlowka');
