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
        // Schema::create('motorista', function (Blueprint $table) {
        //     $table->id();
        //     $table->nome();
        //     $table->cpf();
        //     $table->rg();
        //     $table->id_veiculo();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorista');
    }
};
