<?php

// ========================================
// MODEL 23 : Comite.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    use HasFactory;

    protected $table = 'comites';
    protected $primaryKey = 'id_comite';

    protected $fillable = [
        'nom_pv',
        'date_comite',
        'type_comite',
        'id_membre',
    ];

    protected $casts = [
        'date_comite' => 'date',
    ];

    // Relations
    public function membre()
    {
        return $this->belongsTo(Membre::class, 'id_membre', 'id_membre');
    }

    public function criteres()
    {
        return $this->belongsToMany(
            Critere::class,
            'criteres_validers',
            'id_comite',
            'id_critere'
        );
    }
}