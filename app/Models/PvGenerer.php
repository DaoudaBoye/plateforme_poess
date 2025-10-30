<?php

// ========================================
// MODEL 20 : PvGenerer.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PvGenerer extends Model
{
    use HasFactory;

    protected $table = 'pv_generers';

    protected $fillable = [
        'id_structure',
        'id_commune',
        'etat_comite',
        'commentaire',
    ];

    // Relations
    public function structure()
    {
        return $this->belongsTo(StructureDemandeur::class, 'id_structure', 'id_structure');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'id_commune', 'id_commune');
    }
}