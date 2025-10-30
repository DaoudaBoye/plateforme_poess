<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 15 : create_filiere_structure_table (pivot)
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('filiere_structure', function (Blueprint $table) {
            $table->id();

            // Clés étrangères
            $table->unsignedBigInteger('id_structure');
            $table->unsignedBigInteger('id_filiere');

            // Contraintes
            $table->foreign('id_structure')
                  ->references('id_structure')
                  ->on('structures_demandeurs')
                  ->onDelete('cascade');

            $table->foreign('id_filiere')
                  ->references('id_filiere')
                  ->on('filieres')
                  ->onDelete('cascade');

            // Timestamps (à garder une seule fois)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('filiere_structure');
    }
};

