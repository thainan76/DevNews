<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categoria')->insert([
            array(
                'nome' => 'Produtos'
            ),
            array(
                'nome' => 'Notícias',
            ),
            array(
                'nome' => 'Carros',
            ),
            array(
                'nome' => 'Economia',
            ),
            array(
                'nome' => 'Esporte',
            ),
            array(
                'nome' => 'Fofoca',
            ),
            array(
                'nome' => 'Política',
            )
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
