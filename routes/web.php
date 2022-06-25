<?php

use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\LocalizController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\JewsTradingController;
use App\Http\Controllers\SelectController;

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

Route::get('/addProduit', function () {
    return view('admin.add', ['#addProduit']);
});
Route::get('/test', function () {
    return view('test');
});

// Liens.
Route::get('/search/{search}/{id}', [SelectController::class, 'search'])->name('search');
Route::get('/selectMarque', [SelectController::class, 'marque']);
Route::get('/selectModel', [SelectController::class, 'model']);
Route::get('/selectCarburateur', [SelectController::class, 'carburateur']);
Route::get('/change-language/{id}', [LocalizController::class, 'changeLang']);
Route::get('/apropos', [HomeController::class, 'apropos']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/galerie', [HomeController::class, 'galerie']);
Route::get('/produits', [HomeController::class, 'produit']);
Route::get('/detail', [HomeController::class, 'detailProduit']);
Route::get('/service', [HomeController::class, 'service']);
Route::post('/connect', [LoginController::class, 'connect']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/', [HomeController::class, 'index']);
Route::get('/commande/{id}', [CommandeController::class, 'index']);
Route::get('/detail/produit/{id}', [JewsTradingController::class, 'show']);
Route::post('/send-message', [MessageController::class, 'contact']);
Route::post('/newslatter', [ClientController::class, 'create']);
Route::get('/commentaires/{id}', [MessageController::class, 'commentaires'])->name('commentaires');
Route::post('/commentaires/image', [MessageController::class, 'commentaire']);
Route::get('/comments/admin', [MessageController::class, 'comment_admin']);
Route::get('comment/admin/remove/{id}', [MessageController::class, 'comment_admin_remove'])->name('commentaire/remove');

//ESSAIE
Route::get('/sendsend', [ClientController::class, 'createCampaign']);

// ESSAIE
Route::middleware(['auth'])->group(function () {
    Route::get('/newslatter/all', [ClientController::class, 'index']);
    Route::post('/sendnewslatter', [ClientController::class, 'sendnewslatter']);
    Route::get('/desactivate/newslatter/{id}', [ClientController::class, 'desactivate']);
    Route::get('/activate/newslatter/{id}', [ClientController::class, 'activate']);
    Route::get('/delete/newslatter/{id}', [ClientController::class, 'destroy']);
    Route::post('/commandeCli/{id}', [CommandeController::class, 'edit']);
    Route::get('/commande/view/{id}', [CommandeController::class, 'commandUnique']);
    Route::get('/commandes/all', [CommandeController::class, 'commandeview']);
    Route::get('/accepte/commande/{id}', [CommandeController::class, 'show']);
    Route::get('/annule/commande/{id}', [CommandeController::class, 'annuler']);
    Route::get('/delete/commande/{id}', [CommandeController::class, 'destroy']);
    Route::get('/messages', [MessageController::class, 'index']);
    Route::get('/message/{id}', [MessageController::class, 'message'])->name('message');
    Route::post('envoyer/client/message', [MessageController::class, 'envoyer_message']);


    Route::post('/params_update', [LoginController::class, 'update']);
    Route::post('/confirmeLog', [LoginController::class, 'confirmeLog']);
    Route::get('/parametre', [LoginController::class, 'create'])->middleware(['password.confirm:confirmPass']);
    Route::get('/parametre', [LoginController::class, 'confirmPass'])->name('confirmPass');
    Route::get('/logout', [LoginController::class, 'destroy']);
    Route::get('/galerie/alter', [GalerieController::class, 'index']);
    Route::post('/galerie/photo', [GalerieController::class, 'create']);
    Route::get('/aff', [GalerieController::class, 'index']);
    Route::get('/delete/{id}', [GalerieController::class, 'destroy']);
    Route::get('/ajouter/agent', [AgentController::class, 'index']);
    Route::get('modal-update-agent/{id}', [AgentController::class, 'show']);
    Route::post('/update-agent/{id}', [AgentController::class, 'update']);
    Route::post('/ajoute/agent', [AgentController::class, 'create'])->name('agent');
    Route::get('/delete-agent/{id}', [AgentController::class, 'destroy']);
    Route::get('/afficher/service', [ServiceController::class, 'index']);
    Route::post('/ajouter/service', [ServiceController::class, 'create']);
    Route::post('/update/service', [ServiceController::class, 'update']);
    Route::get('/modifier/service/{id}', [ServiceController::class, 'show']);
    Route::get('/supprimer/service/{id}', [ServiceController::class, 'destroy']);
    Route::get('/afficher/produit', [JewsTradingController::class, 'index']);
    Route::post('/ajouterProduit', [JewsTradingController::class, 'create']);
    Route::get('/modifier/produit/{id}', [JewsTradingController::class, 'edit']);
    Route::get('/ajouter/produit', [JewsTradingController::class, 'store']);
    Route::post('/update/vehicule/{id}', [JewsTradingController::class, 'update'])->name('update.vehicule');
    Route::get('/supprimer-produit/{id}', [JewsTradingController::class, 'destroy']);
    Route::get('/admin', [JewsTradingController::class, 'admin'])->name('admin');
});

Route::get('send-mail', function () {

    $contenu = [
        'title' => 'Mail depuis Letecode.com',
        'body' => 'Ce mail est pour tester l\'envoi de mail depuis laravel'
    ];

    Mail::to('nurubanque@gmail.com')->send(new \App\Mail\ClientMail($contenu));

    dd("Email envoyé avec succès.");
});
