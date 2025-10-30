<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 2 : create_poles_economiques_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('poles_economiques', function (Blueprint $table) {
            $table->id('id_pole');
            $table->string('nom_pole');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('poles_economiques');
    }
};
