<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// ========================================
// MIGRATION 21 : create_criteres_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('criteres', function (Blueprint $table) {
            $table->id('id_critere');
            $table->string('designation');
            $table->decimal('score', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('criteres');
    }
};


