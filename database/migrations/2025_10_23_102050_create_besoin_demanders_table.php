<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 16 : create_besoin_demanders_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('besoin_demanders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_structure')->constrained('structures_demandeurs', 'id_structure')->onDelete('cascade');
            $table->foreignId('id_type_besoin')->constrained('types_besoin', 'id_type_besoin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('besoin_demanders');
    }
};