<?php

// ========================================
// MODEL 14 : Document.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $primaryKey = 'id_document';

    protected $fillable = [
        'nom_document',
        'type_document',
        'est_conforme',
        'ponderation',
        'id_structure',
    ];

    protected $casts = [
        'est_conforme' => 'boolean',
        'ponderation' => 'decimal:2',
    ];

    // Relations
    public function structure()
    {
        return $this->belongsTo(StructureDemandeur::class, 'id_structure', 'id_structure');
    }
}
