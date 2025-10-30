<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 26 : create_pv_generers_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pv_generers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_structure')->constrained('structures_demandeurs', 'id_structure')->onDelete('cascade');
            $table->foreignId('id_commune')->constrained('communes', 'id_commune')->onDelete('cascade');
            $table->string('etat_comite')->nullable();
            $table->text('commentaire')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pv_generers');
    }
};