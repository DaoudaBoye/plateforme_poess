<?php

// ========================================
// MODEL 9 : Domaine.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    protected $table = 'domaines';
    protected $primaryKey = 'id_domaine';

    protected $fillable = [
        'nom_domaine',
        'id_secteur',
    ];

    // Relations
    public function secteur()
    {
        return $this->belongsTo(Secteur::class, 'id_secteur', 'id_secteur');
    }

    public function structures()
    {
        return $this->hasMany(StructureDemandeur::class, 'id_domaine', 'id_domaine');
    }

    public function filieres()
    {
        return $this->belongsToMany(
            Filiere::class,
            'domaine_filiere',
            'id_domaine',
            'id_filiere'
        );
    }
}