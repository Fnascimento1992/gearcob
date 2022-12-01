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
        Schema::create('acordos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->float('valor_inicial');//Refatorar casas decimais
            $table->float('desconto_acordo');//Refatorar casas decimais
            $table->string('status_acordo');
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
        Schema::dropIfExists('acordo');
    }
};
