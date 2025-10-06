<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\StructController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Routes Publiques
|--------------------------------------------------------------------------
*/

Route::controller(AccueilController::class)->group(function () {
    Route::get('/', 'accueil')->name('accueil');
    Route::get('/apropos', 'home')->name('apropos');
    Route::get('/docCandidature', 'doc')->name('docCandidature');
    Route::get('/mediatheque', 'galerie')->name('mediatheque');
});

Route::get('/download-guide', function() {
    $file = public_path('Fiche_Description_BP2.pdf');
    
    if (!file_exists($file)) {
        abort(404, 'Fichier non trouvé');
    }
    
    return response()->download($file);
})->name('download.guide');

/*
|--------------------------------------------------------------------------
| Authentification (sans middleware)
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');



/*
|--------------------------------------------------------------------------
| Routes Protégées (Authentification requise)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    
    // Vérification email
    Route::get('/verify-email', function (Request $request) {
        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            $user->email_verified_at = now();
            $user->save();
    
            return redirect('/login')->with('success', 'Votre email a été confirmé.');
        }
    
        return redirect('/register')->with('error', 'Email non trouvé. Assurez-vous que l\'email est correct.');
    })->name('verify.email');
    
    // Mise à jour du compte
    Route::post('/account/update', [AuthController::class, 'updateAccount'])
        ->name('account.update');
    
    // Déconnexion
    Route::post('/', [AuthController::class, 'logout'])->name('logout');
    
    /*
    |--------------------------------------------------------------------------
    | Routes Structure
    |--------------------------------------------------------------------------
    */
    
    Route::prefix('struct')->middleware('auth')->group(function () {
        Route::get('/dashboard', [StructController::class, 'index'])->name('struct.dashboard');
        Route::get('/candidater', [StructController::class, 'showLocalite'])->name('struct.candidater');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Routes Évaluateur
    |--------------------------------------------------------------------------
    */
    
    Route::prefix('evaluator')->group(function () {
        Route::get('/evalue/index', [EvaluatorController::class, 'index'])->name('evalue.index');
        Route::get('/listeCandidat', [EvaluatorController::class, 'showCandidatesList'])->name('listeCandidat');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Routes Admin
    |--------------------------------------------------------------------------
    */
    
    Route::prefix('admin')->group(function () {
        Route::get('/administrateur', [AdminController::class, 'index'])->name('administrateur');
        Route::get('/listeUser', [AdminController::class, 'user'])->name('listeUser');
        Route::get('/editUser', [AdminController::class, 'editer'])->name('editUser');
        Route::get('/critereAdmin', [AdminController::class, 'critere'])->name('critereAdmin');
    });
});