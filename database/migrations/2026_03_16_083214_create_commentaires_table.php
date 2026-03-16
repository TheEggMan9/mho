<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->foreignId('compte_id')->constrained('comptes')->onDelete('cascade');
            $table->foreignId('fiche_id')->constrained('fiches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
};