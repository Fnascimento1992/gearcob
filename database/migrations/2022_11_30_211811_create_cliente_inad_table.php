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
        Schema::create('cliente_inads', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nome_cliente');
            $table->string('cpf_cliente');
            $table->integer('contato_cliente');
            $table->integer('id_empresa_cedente');
            $table->string('email_cliente');
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
        Schema::dropIfExists('cliente_inad');
    }
};
