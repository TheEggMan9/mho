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
        Schema::table('fiches', function (Blueprint $table) {
            $table->foreignId('espece_id')
                ->nullable()
                ->constrained('especes')
                ->nullOnDelete();

            $table->foreignId('organisation_id')
                ->nullable()
                ->constrained('organisations')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fiches', function (Blueprint $table) {
            $table->dropForeign(['espece_id']);
            $table->dropForeign(['organisation_id']);
            $table->dropColumn(['espece_id', 'organisation_id']);
        });
    }
};
