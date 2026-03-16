<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commentaire_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('compte_id')->constrained('comptes')->onDelete('cascade');
            $table->foreignId('commentaire_id')->constrained('commentaires')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['compte_id', 'commentaire_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('commentaire_likes');
    }
};