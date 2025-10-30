<?php

// ========================================
// MODEL 17 : Affectation.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    protected $table = 'affectations';
    protected $primaryKey = 'id_affectation';

    protected $fillable = [
        'id_structure',
        'id_utilisateur',
    ];

    // Relations
    public function structure()
    {
        return $this->belongsTo(StructureDemandeur::class, 'id_structure', 'id_structure');
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur', 'id_utilisateur');
    }
}
