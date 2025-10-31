<?php

use Illuminate\Support\Facades\Route;
use App\Models\VilleFrance;
use App\Http\Resources\VilleFranceResource;
use App\Http\Controllers\Api\VilleFranceController;


Route::prefix('villes')->controller(VilleFranceController::class)->group(function () {
    Route::get('/', 'index');               // liste + filtres
    Route::post('/', 'store');              // création
    Route::get('{ville}', 'show');          // une ville
    Route::put('{ville}', 'update');        // mise à jour
    Route::delete('{ville}', 'destroy');    // suppression
});