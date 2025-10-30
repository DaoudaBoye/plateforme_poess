<?php

// ========================================
// MODEL 21 : HistoriqueValidation.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueValidation extends Model
{
    use HasFactory;

    protected $table = 'historiques_validation';
    protected $primaryKey = 'id_story';

    protected $fillable = [
        'etat_validation',
        'date_validation',
        'commentaire',
        'id_utilisateur',
    ];

    protected $casts = [
        'date_validation' => 'date',
    ];

    // Relations
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur', 'id_utilisateur');
    }

    public function structures()
    {
        return $this->hasMany(StructureDemandeur::class, 'id_story', 'id_story');
    }

    public function niveaux()
    {
        return $this->belongsToMany(
            NiveauValidation::class,
            'niveau_story',
            'id_story',
            'id_niveau'
        );
    }
}