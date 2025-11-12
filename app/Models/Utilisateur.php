<?php

namespace App\Models;   

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'id_utilisateur';

    protected $fillable = [
        'mot_de_passe',
        'email',
        'id_profil',
        'role',
    ];

    protected $hidden = [
        'mot_de_passe',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the password for the user.
     * Override pour utiliser 'mot_de_passe' au lieu de 'password'
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }

    /**
     * Set the user's password.
     * Automatically hashes the password before saving it.
     */
    public function setMotDePasseAttribute($value)
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