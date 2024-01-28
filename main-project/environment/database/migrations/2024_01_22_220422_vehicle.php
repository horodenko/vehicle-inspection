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
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('tipo_veiculo');
            $table->foreignId('id_motorista')->nullable()->constrained(table: 'motorista')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculo');
    }
};
