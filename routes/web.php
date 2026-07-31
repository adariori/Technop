<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;

Route::get('/', function() {
    return redirect('/accueil');
});

Route::get('/accueil', [EntrepriseController::class, 'accueil']);

Route::get('/services', [EntrepriseController::class, 'services']);

Route::get('/contact', [EntrepriseController::class, 'contact']);

Route::get('/personnel', [EntrepriseController::class, 'personnel']);