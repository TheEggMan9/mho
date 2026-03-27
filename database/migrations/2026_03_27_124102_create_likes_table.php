<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('fiche_id')->constrained('fiches')->onDelete('cascade');
            $table->timestamps();

            // Un utilisateur ne peut liker qu'une seule fois
            $table->unique(['user_id', 'fiche_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes');
    }
};