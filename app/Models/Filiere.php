<?php

// ========================================
// MODEL 11 : Filiere.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $table = 'filieres';
    protected $primaryKey = 'id_filiere';

    protected $fillable = [
        'nom_filiere',
    ];

    // Relations
    public function domaines()
    {
        return $this->belongsToMany(
            Domaine::class,
            'domaine_filiere',
            'id_filiere',
            'id_domaine'
        );
    }

    public function structures()
    {
        return $this->belongsToMany(
            StructureDemandeur::class,
            'filiere_structure',
            'id_filiere',
            'id_structure'
        );
    }
}