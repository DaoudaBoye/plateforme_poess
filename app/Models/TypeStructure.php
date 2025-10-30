<?php

// ========================================
// MODEL 5 : TypeStructure.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeStructure extends Model
{
    use HasFactory;

    protected $table = 'types_structure';
    protected $primaryKey = 'id_type_struct';

    protected $fillable = [
        'nom',
    ];

    // Relations
    public function structures()
    {
        return $this->hasMany(StructureDemandeur::class, 'id_type_struct', 'id_type_struct');
    }

    public function criteres()
    {
        return $this->belongsToMany(
            Critere::class,
            'critere_type_structure',
            'id_type_struct',
            'id_critere'
        );
    }
}
