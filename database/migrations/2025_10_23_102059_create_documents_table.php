<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 17 : create_documents_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id_document');
            $table->string('nom_document');
            $table->string('type_document')->nullable();
            $table->boolean('est_conforme')->default(false);
            $table->decimal('ponderation', 5, 2)->nullable();
            $table->foreignId('id_structure')->constrained('structures_demandeurs', 'id_structure')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

