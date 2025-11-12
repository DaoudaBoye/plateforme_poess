<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ========================================
// MIGRATION 27 : create_historiques_validation_table
// ========================================
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('historiques_validation', function (Blueprint $table) {
            $table->id('id_story');
            $table->string('etat_validation')->nullable();
            $table->date('date_validation')->nullable();
            $table->text('commentaire')->nullable();
            $table->foreignId('id_user')->nullable()->constrained('users', 'id_user')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historiques_validation');
    }
};