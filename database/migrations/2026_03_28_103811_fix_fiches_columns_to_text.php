<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::table('fiches', function (Blueprint $table) {
        $table->text('profession')->nullable()->change();
        $table->text('famille')->nullable()->change();
        $table->text('caracteristiques')->nullable()->change();
        $table->text('affiliations')->nullable()->change();
        $table->text('ennemis')->nullable()->change();
        $table->text('nom_complet')->nullable()->change();
    });
}

public function down(): void
{
    Schema::table('fiches', function (Blueprint $table) {
        $table->string('profession')->nullable()->change();
        $table->string('famille')->nullable()->change();
        $table->string('caracteristiques')->nullable()->change();
        $table->string('affiliations')->nullable()->change();
        $table->string('ennemis')->nullable()->change();
        $table->string('nom_complet')->nullable()->change();
    });
}
};
