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
        Schema::table('veiculo', function (Blueprint $table) {
            $table->foreignId('id_motorista')->nullable()->constrained(
                table: 'motorista'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('veiculo', function ($table) {
            $table->dropColumn('id_motorista');
        });
    }
};
