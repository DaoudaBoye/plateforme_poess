<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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

    public function enrolement(): View
    {
        $user = Auth::user();
        
        return view('struct.enrolement', compact('user'));
        
    }
    
    /**
     * Affiche la page de candidature
     */
    public function showLocalite(): View
    {
        return view('struct.candidater');
    }
    
}