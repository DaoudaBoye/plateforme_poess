<?php

// ========================================
// MODEL 10 : Departement.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departements';
    protected $primaryKey = 'id_departement';

    protected $fillable = [
        'nom_departement',
        'id_region',
    ];

    // Relations
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id_region');
    }

    public function communes()
    {
        return $this->hasMany(Commune::class, 'id_departement', 'id_departement');
    }
}
