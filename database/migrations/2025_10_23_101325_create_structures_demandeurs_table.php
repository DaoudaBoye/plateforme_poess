<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 14 : create_structures_demandeurs_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('structures_demandeurs', function (Blueprint $table) {
            $table->id('id_structure');
            $table->string('nom_structure');
            $table->string('adresse')->nullable();
            $table->string('contact')->nullable();
            $table->date('date_creation')->nullable();
            $table->string('localisation_activite')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('num_agrement')->nullable();
            $table->string('adresse_contact')->nullable();
            $table->string('num_legit_commerce')->nullable();
            $table->string('ninu')->nullable();
            $table->integer('nombre_homme')->nullable();
            $table->integer('nombre_femme')->nullable();
            $table->decimal('num_recepisse', 10, 2)->nullable();
            $table->string('etat_demande')->nullable();
            $table->date('date_depot')->nullable();
            $table->decimal('score', 5, 2)->nullable();
            $table->string('statue_juridique')->nullable();
            $table->string('filiere')->nullable();
            $table->string('activite_principale')->nullable();
            $table->text('probleme_identifier')->nullable();
            $table->text('solution_apporter')->nullable();
            $table->text('element_caract_css')->nullable();
            $table->string('dispo_etat_financier')->nullable();
            $table->decimal('capital_social', 15, 2)->nullable();
            
            $table->foreignId('id_domaine')->nullable()->constrained('domaines', 'id_domaine')->onDelete('set null');
            $table->foreignId('id_user')->nullable()->constrained('users', 'id_user')->onDelete('set null');
            $table->foreignId('id_story')->nullable();
            $table->foreignId('id_type_struct')->nullable()->constrained('types_structure', 'id_type_struct')->onDelete('set null');
            $table->foreignId('id_commune')->nullable()->constrained('communes', 'id_commune')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('structures_demandeurs');
    }
};
