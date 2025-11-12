<?php

namespace App\Models;   

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'password',
        'email',
        'id_profil',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Redéfinition du mot de passe pour l’authentification.
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Mutateur : hash automatiquement le mot de passe avant enregistrement.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // ================================
    //          RELATIONS
    // ================================

    public function profil()
    {
        return $this->belongsTo(Profil::class, 'id_profil', 'id_profil');
    }

    public function structures()
    {
        return $this->hasMany(StructureDemandeur::class, 'id_user', 'id_user');
    }

    public function agrements()
    {
        return $this->hasMany(Agrement::class, 'id_user', 'id_user');
    }

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'id_user', 'id_user');
    }

    public function historiques()
    {
        return $this->hasMany(HistoriqueValidation::class, 'id_user', 'id_user');
    }
}
