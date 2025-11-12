<?php

// ========================================
// MODEL 16 : Agrement.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agrement extends Model
{
    use HasFactory;

    protected $table = 'agrements';
    protected $primaryKey = 'id_agrement';

    protected $fillable = [
        'date_signature',
        'reference_agrement',
        'statut',
        'id_utilisateur',
        'id_structure',
    ];

    protected $casts = [
        'date_signature' => 'date',
    ];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function structure()
    {
        return $this->belongsTo(StructureDemandeur::class, 'id_structure', 'id_structure');
    }
}
