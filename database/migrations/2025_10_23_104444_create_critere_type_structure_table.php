<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 22 : create_critere_type_structure_table (pivot)
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('critere_type_structure', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_type_struct')->constrained('types_structure', 'id_type_struct')->onDelete('cascade');
            $table->foreignId('id_critere')->constrained('criteres', 'id_critere')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('critere_type_structure');
    }
};
