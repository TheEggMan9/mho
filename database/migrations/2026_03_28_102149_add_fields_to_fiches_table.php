<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::table('fiches', function (Blueprint $table) {
        $table->string('nom_complet')->nullable()->after('organisation_id');
        $table->string('profession')->nullable()->after('nom_complet');
        $table->string('famille')->nullable()->after('profession');
        $table->text('pouvoirs')->nullable()->after('famille');
        $table->string('caracteristiques')->nullable()->after('pouvoirs');
        $table->string('affiliations')->nullable()->after('caracteristiques');
        $table->string('ennemis')->nullable()->after('affiliations');
        $table->text('histoire')->nullable()->after('ennemis');
    });
}

public function down(): void
{
    Schema::table('fiches', function (Blueprint $table) {
        $table->dropColumn([
            'nom_complet',
            'profession',
            'famille',
            'pouvoirs',
            'caracteristiques',
            'affiliations',
            'ennemis',
            'histoire'
        ]);
    });
}
};
