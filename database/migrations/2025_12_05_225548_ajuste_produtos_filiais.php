<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Criar tabela filiais (CASO NÃO EXISTA)
        if (!Schema::hasTable('filiais')) {
            Schema::create('filiais', function (Blueprint $table) {
                $table->id();
                $table->string('filial', 30);
                $table->timestamps();
            });
        }

        // Criar tabela produto_filiais
        if (!Schema::hasTable('produto_filiais')) {
            Schema::create('produto_filiais', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('filial_id');
                $table->unsignedBigInteger('produto_id');
                $table->decimal('preco_venda', 8, 2);
                $table->integer('estoque_minimo');
                $table->integer('estoque_maximo');
                $table->timestamps();

                // Foreign keys
                $table->foreign('filial_id')->references('id')->on('filiais');
                $table->foreign('produto_id')->references('id')->on('produtos');
            });
        }

        // Modificar tabela produtos
        if (Schema::hasColumn('produtos', 'preco_venda')) {
            Schema::table('produtos', function (Blueprint $table) {
                $table->dropColumn([
                    'preco_venda',
                    'estoque_minimo',
                    'estoque_maximo'
                ]);
            });
        }
    }

    public function down(): void
    {
        // Restaurar colunas na tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            if (!Schema::hasColumn('produtos', 'preco_venda')) {
                $table->decimal('preco_venda', 8, 2)->default(0.01);
            }
            if (!Schema::hasColumn('produtos', 'estoque_minimo')) {
                $table->decimal('estoque_minimo')->default(0);
            }
            if (!Schema::hasColumn('produtos', 'estoque_maximo')) {
                $table->decimal('estoque_maximo')->default(0);
            }
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
};
