<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 4 : create_types_besoin_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('types_besoin', function (Blueprint $table) {
            $table->id('id_type_besoin');
            $table->string('nom');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('types_besoin');
    }
};