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
        Schema::create('ped_mes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->int('mes');
            $table->int('ano');
            $table->string('desconto');
            $table->string('entrega');
            $table->string('valor');
            $table->string('origem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ped_mes');
    }
};
