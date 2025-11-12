<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    // Affiche le formulaire de login
    public function login()
    {
        return view('auth.login'); // ton Blade avec le modal
    }

    // Traite la connexion
    public function handleLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Récupération du profil via la relation
            $role = $user->profil->nom_profil ?? null;

            // Redirection selon le profil
            switch ($role) {
                case 'structure':
                    return redirect()->route('struct.dashboard');
                case 'evaluateur':
                case 'DMIF':
                case 'jury':
                    return redirect()->route('evalue.index');
                case 'superAdmin':
                    return redirect()->route('administrateur');
                default:
                    return redirect()->route('accueil');
            }
        }

        // Échec de connexion : réouvrir le modal et afficher l'erreur
        return redirect()->back()
            ->with('error_msg', 'Adresse e-mail ou mot de passe incorrect.')
            ->with('open_modal', true)
            ->withInput($request->only('email'));
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('accueil')->with('success', 'Vous êtes déconnecté.');
    }
}
