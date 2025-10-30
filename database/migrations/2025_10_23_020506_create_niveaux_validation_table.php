<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 6 : create_niveaux_validation_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('niveaux_validation', function (Blueprint $table) {
            $table->id('id_niveau');
            $table->string('designation');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('niveaux_validation');
    }
};