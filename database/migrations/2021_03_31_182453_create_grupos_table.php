<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id_grupo');
            $table->string('nome', 30);
            $table->string('codPai', 6);
            $table->integer('publicarWeb');
            $table->text('nomeWeb');
            $table->double('comissao');
            $table->double('reajuste');
            $table->integer('flagMerc');
            $table->integer('flagFabr');
            $table->integer('flagInsumo');
            $table->integer('flagComisGuia');
            $table->integer('menuWeb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
