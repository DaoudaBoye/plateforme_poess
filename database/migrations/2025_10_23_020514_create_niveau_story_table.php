<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 28 : create_niveau_story_table (pivot)
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('niveau_story', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_story')->constrained('historiques_validation', 'id_story')->onDelete('cascade');
            $table->foreignId('id_niveau')->constrained('niveaux_validation', 'id_niveau')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('niveau_story');
    }
};