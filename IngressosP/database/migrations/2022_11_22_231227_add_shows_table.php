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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('descricao',200);
            $table->integer('qtd_ingressos');
            $table->string('data');
            $table->string('horario_i');
            $table->string('horario_f');
            $table->string('imagem');
            $table->foreignId('artista_id')->constrained('artistas');
            $table->foreignId('local_id')->constrained('locais');
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
        Schema::dropIfExists('shows');
    }
};
