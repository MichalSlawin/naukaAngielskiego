<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlowkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slowkos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategoria', 64);
            $table->string('podkategoria', 64);
            $table->integer('zestaw');
            $table->string('slowko', 128);
            $table->timestamps();
        });

        DB::table('slowkos')->insert([
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '1',
            'slowko' => 'gitara;guitar',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '1',
            'slowko' => 'skrzypce;violin',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '1',
            'slowko' => 'bęben;drum',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '1',
            'slowko' => 'flet;flute',
        ],

        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '2',
            'slowko' => 'trąbka;trumpet',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '2',
            'slowko' => 'wiolonczela;cello',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '2',
            'slowko' => 'puzon;trombone',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Instrumenty',
            'zestaw' => '2',
            'slowko' => 'klarnet;clarinet',
        ],

        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Muzycy',
            'zestaw' => '1',
            'slowko' => 'kompozytor;composer',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Muzycy',
            'zestaw' => '1',
            'slowko' => 'muzyk;musician',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Muzycy',
            'zestaw' => '1',
            'slowko' => 'dyrygent;conductor',
        ],
        [
            'kategoria' => 'Muzyka',
            'podkategoria' => 'Muzycy',
            'zestaw' => '1',
            'slowko' => 'śpiewak;singer',
        ],

        [
            'kategoria' => 'Zwierzęta',
            'podkategoria' => 'Ssaki',
            'zestaw' => '1',
            'slowko' => 'niedźwiedź;bear',
        ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slowkos');
    }
}
