<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unidade', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5); // cm, mm, m, kg
            $table->string('descricao', 30);
            $table->timestamps();
        });

        // adicionar o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidade');
        });

        // adicionar o relacionamento com a tabela produto detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // remover o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        // remover o relacionamento com a tabela produto detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidade');
    }
};
