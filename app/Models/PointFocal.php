<?php

// ========================================
// MODEL 15 : PointFocal.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointFocal extends Model
{
    use HasFactory;

    protected $table = 'points_focals';
    protected $primaryKey = 'id_point_focal';

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'tel',
        'adresse',
        'nationalite',
        'fonction',
        'sexe',
        'id_structure',
    ];

    // Relations
    public function structure()
    {
        return $this->belongsTo(StructureDemandeur::class, 'id_structure', 'id_structure');
    }
}
