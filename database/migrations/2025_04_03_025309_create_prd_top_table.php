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
        Schema::create('prd_top', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('produto_id');
                $table->string('quantidade')->nullable();
                $table->string('geral')->nullable();
                $table->string('categoria')->nullable();
                $table->string('mes');
                $table->string('ano');
                $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prd_top');
    }
};
