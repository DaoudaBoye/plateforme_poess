<?php

// ========================================
// MODEL 6 : NiveauValidation.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauValidation extends Model
{
    use HasFactory;

    protected $table = 'niveaux_validation';
    protected $primaryKey = 'id_niveau';

    protected $fillable = [
        'designation',
    ];

    // Relations
    public function historiques()
    {
        return $this->belongsToMany(
            HistoriqueValidation::class,
            'niveau_story',
            'id_niveau',
            'id_story'
        );
    }
}
