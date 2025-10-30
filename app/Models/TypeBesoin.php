<?php

// ========================================
// MODEL 4 : TypeBesoin.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBesoin extends Model
{
    use HasFactory;

    protected $table = 'types_besoin';
    protected $primaryKey = 'id_type_besoin';

    protected $fillable = [
        'nom',
    ];

    // Relations
    public function structures()
    {
        return $this->belongsToMany(
            StructureDemandeur::class,
            'besoin_demanders',
            'id_type_besoin',
            'id_structure'
        );
    }
}