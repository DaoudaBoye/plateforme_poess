<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 5 : create_types_structure_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('types_structure', function (Blueprint $table) {
            $table->id('id_type_struct');
            $table->string('nom');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('types_structure');
    }
};