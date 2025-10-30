<?php

// ========================================
// MODEL 12 : Commune.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $table = 'communes';
    protected $primaryKey = 'id_commune';

    protected $fillable = [
        'nom_commune',
        'id_departement',
    ];

    // Relations
    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_departement', 'id_departement');
    }

    public function structures()
    {
        return $this->hasMany(StructureDemandeur::class, 'id_commune', 'id_commune');
    }

    public function pvGenerers()
    {
        return $this->hasMany(PvGenerer::class, 'id_commune', 'id_commune');
    }
}
