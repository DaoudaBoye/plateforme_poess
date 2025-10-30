<?php

// ========================================
// MODEL 19 : CritereValider.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CritereValider extends Model
{
    use HasFactory;

    protected $table = 'criteres_validers';

    protected $fillable = [
        'id_comite',
        'id_critere',
    ];

    // Relations
    public function comite()
    {
        return $this->belongsTo(Comite::class, 'id_comite', 'id_comite');
    }

    public function critere()
    {
        return $this->belongsTo(Critere::class, 'id_critere', 'id_critere');
    }
}