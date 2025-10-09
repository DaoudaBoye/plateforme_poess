<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
     // La page/vue dashboard.blade.php
     public function home(){
        return view('page-accueil.apropos');
    }

    // La page/vue dashboard.blade.php
    public function accueil(){
        return view('page-accueil.accueil');
    }

     // La page/vue dashboard.blade.php
    public function marketplace(){
        return view('page-accueil.marketplace');
    }

         // La page/vue dashboard.blade.php
    public function ProduitCoopérative(){
        return view('page-accueil.Produits-Cooperative');
    }

    // La page/vue dashboard.blade.php
    public function doc(){
        return view('page-accueil.docCandidature');
    }

     // La page/vue dashboard.blade.php
     public function galerie(){
        return view('page-accueil.mediatheque');
    }

}
