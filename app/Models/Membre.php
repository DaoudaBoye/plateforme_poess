<?php

// ========================================
// MODEL 22 : Membre.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $table = 'membres';
    protected $primaryKey = 'id_membre';

    protected $fillable = [
        'nom_complet',
        'email',
        'tel',
    ];

    // Relations
    public function comites()
    {
        return $this->hasMany(Comite::class, 'id_membre', 'id_membre');
    }
}