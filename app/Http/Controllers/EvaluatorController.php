<?php 

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Candidate; // Ajoutez votre modèle

class EvaluatorController extends Controller 
{
    /**
     * Affiche la page d'évaluation
     */
    public function index(): View
    {
        return view('evaluator.evalue');
    }

    /**
     * Affiche la liste des candidats
     */
    public function showCandidatesList(): View
    {
       
        
        // Passer les données à la vue
        return view('evaluator.listeCandidat');
    }

   
}