<?php

use App\Http\Controllers\JewsTradingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/galerie', function () {
    return view('galerie');
});
Route::get('/produits', function () {
    return view('produit');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/detail', function () {
    return view('detailsProduits');
});
Route::get('/addProduit', function () {
    return view('admin.add', ['#addProduit']);
});
Route::get('/alterProduit', function () {
    return view('admin.alter', ['produit' => true]);
});
Route::get('/alterService', function () {
    return view('admin.alter', ['service' => true]);
});
Route::get('/galerie-alter', function () {
    return view('admin.galerieAddAlter');
});
Route::get('/parametre', function () {
    return view('admin.parametre');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/test', function () {
    return view('test', ['#addProduit']);
});

// Liens
Route::post('/ajoute_agent', [JewsTradingController::class, 'ajouteAgent'])->name('agent');
Route::get('/admin', [JewsTradingController::class, 'admin'])->name('admin');
Route::post('/ajouterProduit', [JewsTradingController::class, 'create']);
Route::post('/ajoute_service', [ServiceController::class, 'create']);
Route::post('/connect', [LoginController::class, 'connect']);
