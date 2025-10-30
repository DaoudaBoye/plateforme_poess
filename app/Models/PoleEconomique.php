<?php

// ========================================
// MODEL 2 : PoleEconomique.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoleEconomique extends Model
{
    use HasFactory;

    protected $table = 'poles_economiques';
    protected $primaryKey = 'id_pole';

    protected $fillable = [
        'nom_pole',
        'description',
    ];

    // Relations
    public function regions()
    {
        return $this->hasMany(Region::class, 'id_pole', 'id_pole');
    }
}


