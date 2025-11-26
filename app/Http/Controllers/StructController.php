<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Region;

class StructController extends Controller
{
    /**
     * Affiche le tableau de bord
     */
    public function index(): View
    {
        $user = Auth::user();
        
        return view('struct.dashboard', compact('user'));
    }

    /**
     * Affiche le formulaire d'enrôlement
     */
    public function enrolement(): View
    {
        $user = Auth::user();
        $regions = Region::orderBy('nom_region')->get();
        
        return view('struct.enrolement', compact('user', 'regions'));
    }
    
    /**
     * Affiche la page de candidature
     */
    public function showLocalite(): View
    {
        return view('struct.candidater');
    }
}