<?php

// ========================================
// MODEL 3 : Secteur.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;

    protected $table = 'secteurs';
    protected $primaryKey = 'id_secteur';

    protected $fillable = [
        'primaire',
        'secondaire',
        'tertiaire',
    ];

    // Relations
    public function domaines()
    {
        return $this->hasMany(Domaine::class, 'id_secteur', 'id_secteur');
    }
}
