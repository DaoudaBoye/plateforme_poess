<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
     public function home(){
        return view('page-accueil.apropos');
    }

    public function accueil(){
        return view('page-accueil.accueil');
    }

    public function marketplace(){
        return view('page-accueil.marketplace');
    }

    public function ProduitCoopérative(){
        return view('page-accueil.Produits-Cooperative');
    }

    public function doc(){
        return view('page-accueil.docCandidature');
    }

     public function galerie(){
        return view('page-accueil.mediatheque');
    }

}
