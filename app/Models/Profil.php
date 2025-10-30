<?php

// ========================================
// MODEL 1 : Profil.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profils';
    protected $primaryKey = 'id_profil';

    protected $fillable = [
        'nom_profil',
    ];

    // Relations
    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class, 'id_profil', 'id_profil');
    }
}
