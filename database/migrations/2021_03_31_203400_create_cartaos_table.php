<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartaos', function (Blueprint $table) {
            $table->increments('id_cartao');
            $table->string('codigo',10);
            $table->string('descricao',50);
            $table->string('ctaRazao',15);
            $table->double('txAdministradora');
            $table->integer('diasRecebimento');
            $table->integer('tipoPgto');
            $table->integer('flagTef');
            $table->integer('parcelas');
            $table->string('codCadastro');
            $table->string('conta',12);
            $table->string('bandeira',2);
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
        Schema::dropIfExists('cartaos');
    }
}
