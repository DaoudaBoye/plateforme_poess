<?php

// ========================================
// MODEL 7 : Region.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';
    protected $primaryKey = 'id_region';

    protected $fillable = [
        'nom_region',
        'id_pole',
    ];

    // Relations
    public function poleEconomique()
    {
        return $this->belongsTo(PoleEconomique::class, 'id_pole', 'id_pole');
    }

    public function departements()
    {
        return $this->hasMany(Departement::class, 'id_region', 'id_region');
    }
}