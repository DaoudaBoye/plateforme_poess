<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agrements', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id('id_agrement');
            $table->date('date_signature')->nullable();
            $table->string('reference_agrement')->nullable();
            $table->string('statut')->nullable();
            
            $table->unsignedBigInteger('id_utilisateur');
            $table->unsignedBigInteger('id_structure');

            // Clés étrangères
            $table->foreign('id_utilisateur')
                  ->references('id_utilisateur')
                  ->on('utilisateurs')
                  ->onDelete('cascade');

            $table->foreign('id_structure')
                  ->references('id_structure')
                  ->on('structures_demandeurs')
                  ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agrements');
    }
};