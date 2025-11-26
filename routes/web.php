<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\StructController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| ROUTES PUBLIQUES
|--------------------------------------------------------------------------
*/

// Pages publiques
Route::controller(AccueilController::class)->group(function () {
    Route::get('/', 'accueil')->name('accueil');
    Route::get('/apropos', 'home')->name('apropos');
    Route::get('/docCandidature', 'doc')->name('docCandidature');
    Route::get('/mediatheque', 'galerie')->name('mediatheque');
    Route::get('/marketplace', 'marketplace')->name('marketplace');
    Route::get('/Produits-Cooperative', 'ProduitCoopérative')->name('produits.cooperative');
});


/*
|--------------------------------------------------------------------------
| AUTHENTIFICATION (PUBLIQUE)
|--------------------------------------------------------------------------
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'handleLogin')->name('handleLogin');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register')->name('register.post');
});

/*
|--------------------------------------------------------------------------
| ROUTES PROTÉGÉES (AUTHENTIFICATION REQUISE)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |----------------------------------------------------------------------
    | VÉRIFICATION EMAIL (⚠️ À sécuriser avec token signé)
    |----------------------------------------------------------------------
    */
    Route::get('/verify-email', function (Request $request) {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->update(['email_verified_at' => now()]);
            return redirect()->route('login')
                ->with('success', 'Votre email a été confirmé.');
        }

        return redirect()->route('register')
            ->with('error', 'Email introuvable.');
    })->name('verify.email');

    /*
    |----------------------------------------------------------------------
    | GESTION DU COMPTE UTILISATEUR
    |----------------------------------------------------------------------
    */
    Route::controller(AuthController::class)->group(function () {
        Route::post('/account/update', 'updateAccount')->name('account.update');
        Route::post('/logout', 'logout')->name('logout');
    });

    /*
    |----------------------------------------------------------------------
    | API LOCALISATION (Cascading Dropdowns)
    |----------------------------------------------------------------------
    */
    Route::prefix('api')->name('api.')->controller(LocationController::class)->group(function () {
        Route::get('/departements/{regionId}', 'getDepartements')->name('departements');
        Route::get('/communes/{departementId}', 'getCommunes')->name('communes');
    });

    /*
    |----------------------------------------------------------------------
    | ESPACE STRUCTURE
    |----------------------------------------------------------------------
    */
    Route::prefix('struct')->name('struct.')->controller(StructController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/enrolement', 'enrolement')->name('enrolement');
        Route::get('/candidater', 'showLocalite')->name('candidater');
    });

    /*
    |----------------------------------------------------------------------
    | ESPACE ÉVALUATEUR
    |----------------------------------------------------------------------
    */
    Route::prefix('evaluator')->name('evaluator.')->controller(EvaluatorController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/listeCandidat', 'showCandidatesList')->name('candidates');
    });


});