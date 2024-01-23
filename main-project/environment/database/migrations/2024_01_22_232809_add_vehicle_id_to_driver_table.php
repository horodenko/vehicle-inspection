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
        Schema::table('motorista', function (Blueprint $table) {
            $table->foreignId('id_veiculo')->nullable()->constrained(
                table: 'veiculo'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('motorista', function ($table) {
            $table->dropColumn('id_veiculo');
        });
    }
};
