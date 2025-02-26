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
        Schema::disableForeignKeyConstraints();

        Schema::create('prd_composicaos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('pai_id');
            $table->foreign('pai_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->string('filho_id');
            $table->foreign('filho_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->string('quantidade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prd_composicao');
    }
};
