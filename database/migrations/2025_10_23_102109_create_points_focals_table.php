<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 18 : create_points_focals_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('points_focals', function (Blueprint $table) {
            $table->id('id_point_focal');
            $table->string('prenom');
            $table->string('nom');
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('adresse')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('fonction')->nullable();
            $table->string('sexe')->nullable();
            $table->foreignId('id_structure')->constrained('structures_demandeurs', 'id_structure')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('points_focals');
    }
};
