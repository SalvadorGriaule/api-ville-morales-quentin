<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view(("welcome"));
});

Route::prefix('villes')->controller(ApiController::class)->group(function () {
    Route::get('/dep/{dep}',"dep");
    Route::get("/{ville}","ville");
    Route::get("/code/{code}","code");
});