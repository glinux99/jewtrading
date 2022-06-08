<?php

use App\Http\Controllers\GalerieController;
use App\Http\Controllers\JewsTradingController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/apropos', [HomeController::class, 'apropos']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/galerie', [HomeController::class, 'galerie']);
Route::get('/produits', [HomeController::class, 'produit']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/detail', function () {
    return view('detailsProduits');
});
Route::get('/addProduit', function () {
    return view('admin.add', ['#addProduit']);
});
Route::get('/alterService', function () {
    $services = Service::all();
    $service = true;
    return view('admin.alter', compact('service', 'services'));
});
Route::get('/galerie-alter', [GalerieController::class, 'index']);
Route::get('/parametre', function () {
    return view('admin.parametre');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/test', function () {
    return view('test', ['#addProduit']);
});

// Liens.
Route::post('/galerie_photo', [GalerieController::class, 'create']);
Route::get('/aff', [GalerieController::class, 'index']);
Route::get('/delete/{id}', [GalerieController::class, 'destroy']);
Route::post('/ajoute_agent', [AgentController::class, 'create'])->name('agent');
Route::get('/add-agent', [AgentController::class, 'index']);
Route::get('modal-update-agent/{id}', [AgentController::class, 'show']);
Route::post('/update-agent/{id}', [AgentController::class, 'update']);
Route::get('/delete-agent/{id}', [AgentController::class, 'destroy']);
Route::get('/alterProduit', [JewsTradingController::class, 'store']);
Route::get('/supprimer-produit/{id}', [JewsTradingController::class, 'destroy']);
Route::post('/update-vehicule/{id}', [JewsTradingController::class, 'update']);
Route::get('/modifier-produit/{id}', [JewsTradingController::class, 'activeModal']);
Route::get('/admin', [JewsTradingController::class, 'admin'])->name('admin');
Route::post('/ajouterProduit', [JewsTradingController::class, 'create']);
Route::post('/ajoute_service', [ServiceController::class, 'create']);
Route::get('/modifier/service/{id}', [ServiceController::class, 'activeModal']);
Route::post('/update-service', [ServiceController::class, 'update']);
Route::get('/supprimer_service/{id}', [ServiceController::class, 'destroy']);
Route::post('/connect', [LoginController::class, 'connect']);
Route::post('/params_update', [LoginController::class, 'update']);
Route::get('/logout', [LoginController::class, 'destroy']);
Route::post('/galerie-photo', [GalerieController::class, 'create']);
