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
        Schema::create('prd_saidas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('produto_id');
            $table->string('quantidade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prd_saida');
    }
};
