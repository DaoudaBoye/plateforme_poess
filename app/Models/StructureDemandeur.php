<?php

// ========================================
// MODEL 13 : StructureDemandeur.php
// ========================================
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureDemandeur extends Model
{
    use HasFactory;

    protected $table = 'structures_demandeurs';
    protected $primaryKey = 'id_structure';

    protected $fillable = [
        'nom_structure',
        'adresse',
        'contact',
        'date_creation',
        'localisation_activite',
        'telephone',
        'email',
        'num_agrement',
        'adresse_contact',
        'num_legit_commerce',
        'ninu',
        'nombre_homme',
        'nombre_femme',
        'num_recepisse',
        'etat_demande',
        'date_depot',
        'score',
        'statue_juridique',
        'filiere',
        'activite_principale',
        'probleme_identifier',
        'solution_apporter',
        'element_caract_css',
        'dispo_etat_financier',
        'capital_social',
        'id_domaine',
        'id_utilisateur',
        'id_story',
        'id_type_struct',
        'id_commune',
    ];

    protected $casts = [
        'date_creation' => 'date',
        'date_depot' => 'date',
        'score' => 'decimal:2',
        'num_recepisse' => 'decimal:2',
        'capital_social' => 'decimal:2',
        'est_conforme' => 'boolean',
    ];

    // Relations
    public function domaine()
    {
        return $this->belongsTo(Domaine::class, 'id_domaine', 'id_domaine');
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur', 'id_utilisateur');
    }

    public function typeStructure()
    {
        return $this->belongsTo(TypeStructure::class, 'id_type_struct', 'id_type_struct');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'id_commune', 'id_commune');
    }

    public function historiqueValidation()
    {
        return $this->belongsTo(HistoriqueValidation::class, 'id_story', 'id_story');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'id_structure', 'id_structure');
    }

    public function pointsFocaux()
    {
        return $this->hasMany(PointFocal::class, 'id_structure', 'id_structure');
    }

    public function agrements()
    {
        return $this->hasMany(Agrement::class, 'id_structure', 'id_structure');
    }

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'id_structure', 'id_structure');
    }

    public function pvGenerers()
    {
        return $this->hasMany(PvGenerer::class, 'id_structure', 'id_structure');
    }

    public function filieres()
    {
        return $this->belongsToMany(
            Filiere::class,
            'filiere_structure',
            'id_structure',
            'id_filiere'
        );
    }

    public function typesbesoin()
    {
        return $this->belongsToMany(
            TypeBesoin::class,
            'besoin_demanders',
            'id_structure',
            'id_type_besoin'
        );
    }
}