<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 24 : create_comites_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comites', function (Blueprint $table) {
            $table->id('id_comite');
            $table->string('nom_pv');
            $table->date('date_comite')->nullable();
            $table->string('type_comite')->nullable();
            $table->foreignId('id_membre')->nullable()->constrained('membres', 'id_membre')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comites');
    }
};
