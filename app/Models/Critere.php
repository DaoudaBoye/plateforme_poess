<?php

// ========================================
// MODEL 18 : Critere.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critere extends Model
{
    use HasFactory;

    protected $table = 'criteres';
    protected $primaryKey = 'id_critere';

    protected $fillable = [
        'designation',
        'score',
    ];

    protected $casts = [
        'score' => 'decimal:2',
    ];

    // Relations
    public function typesStructure()
    {
        return $this->belongsToMany(
            TypeStructure::class,
            'critere_type_structure',
            'id_critere',
            'id_type_struct'
        );
    }

    public function comites()
    {
        return $this->belongsToMany(
            Comite::class,
            'criteres_validers',
            'id_critere',
            'id_comite'
        );
    }
}
