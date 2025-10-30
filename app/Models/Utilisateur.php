<?php

// ========================================
// MODEL 8 : Utilisateur.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'id_utilisateur';

    protected $fillable = [
        'mot_de_passe',
        'email',
        'id_profil',
    ];

    protected $hidden = [
        'mot_de_passe',
        'remember_token',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


      /**
     * Set the user's password.
     * Automatically hashes the password before saving it.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['mot_de_passe'] = bcrypt($value);
    }


    // Relations
    public function profil()
    {
        return $this->belongsTo(Profil::class, 'id_profil', 'id_profil');
    }

    public function structures()
    {
        return $this->hasMany(StructureDemandeur::class, 'id_utilisateur', 'id_utilisateur');
    }

    public function agrements()
    {
        return $this->hasMany(Agrement::class, 'id_utilisateur', 'id_utilisateur');
    }

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'id_utilisateur', 'id_utilisateur');
    }

    public function historiques()
    {
        return $this->hasMany(HistoriqueValidation::class, 'id_utilisateur', 'id_utilisateur');
    }
}

