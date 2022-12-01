<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Refatorar para mais colunas no futuro;
        Schema::create('dividas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome_empresa_cedente');
            $table->bigInteger('numero_contrato');
            $table->integer('id_cliente');
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
        Schema::dropIfExists('divida');
    }
};
