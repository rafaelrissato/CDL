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
        Schema::create('prd_confs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('produto_id');
            $table->string('padraoFicha')->default(0);
            $table->string('padraoCompra')->default(0);
            $table->string('codigo')->default(0);
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prd_confs');
    }
};
