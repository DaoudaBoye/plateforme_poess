<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Departement;
use App\Models\Commune;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    // Méthode pour la page d'enrôlement
    public function enrolement()
    {
        $regions = Region::orderBy('nom_region')->get();
        return view('struct.enrolement', compact('regions'));
    }

    // Méthode pour la page create (si vous l'utilisez ailleurs)
    public function create()
    {
        $regions = Region::orderBy('nom_region')->get();
        return view('struct.create', compact('regions'));
    }

    // API pour récupérer les départements d'une région
    public function getDepartements($regionId)
    {
        $departements = Departement::where('id_region', $regionId)
            ->orderBy('nom_departement')
            ->get();
        return response()->json($departements);
    }

    // API pour récupérer les communes d'un département
    public function getCommunes($departementId)
    {
        $communes = Commune::where('id_departement', $departementId)
            ->orderBy('nom_commune')
            ->get();
        return response()->json($communes);
    }
}