<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 13 : create_domaine_filiere_table (pivot)
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('domaine_filiere', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_domaine')->constrained('domaines', 'id_domaine')->onDelete('cascade');
            $table->foreignId('id_filiere')->constrained('filieres', 'id_filiere')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('domaine_filiere');
    }
};