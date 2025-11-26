<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LocationController;

/*
|--------------------------------------------------------------------------
| API - LOCALISATION (REGIONS, DEPARTEMENTS, COMMUNES)
|--------------------------------------------------------------------------
|
| Ces routes sont maintenant publiques, elles n'ont plus besoin d'authentification.
| Idéal pour un formulaire de sélection géographique accessible sans login.
|
*/

Route::get('/regions', [LocationController::class, 'getRegions'])
    ->name('api.regions.index');

Route::get('/regions/{regionId}/departements', [LocationController::class, 'getDepartementsByRegion'])
    ->where('regionId', '[0-9]+')
    ->name('api.regions.departements');

Route::get('/departements/{departementId}/communes', [LocationController::class, 'getCommunesByDepartement'])
    ->where('departementId', '[0-9]+')
    ->name('api.departements.communes');

Route::get('/regions/{regionId}/full', [LocationController::class, 'getFullLocationData'])
    ->where('regionId', '[0-9]+')
    ->name('api.regions.full');

Route::get('/locations/search', [LocationController::class, 'search'])
    ->name('api.locations.search');

// Cette route POST pour vider le cache reste publique si nécessaire
Route::post('/locations/clear-cache', [LocationController::class, 'clearCache'])
    ->name('api.locations.clear-cache');
