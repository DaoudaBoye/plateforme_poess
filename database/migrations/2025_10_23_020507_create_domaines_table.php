<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 9 : create_domaines_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('domaines', function (Blueprint $table) {
            $table->id('id_domaine');
            $table->string('nom_domaine');
            $table->foreignId('id_secteur')->constrained('secteurs', 'id_secteur')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('domaines');
    }
};