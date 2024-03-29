<?php

use App\Mail\ClientMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\Site\MessageController;
use App\Http\Controllers\Site\ProduitController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\HomeSiteController;
use App\Http\Controllers\adminjews\UserController;
use App\Http\Controllers\adminjews\AdminController;
use App\Http\Controllers\adminjews\CommandeController;

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



// Authentificate
Route::group(['middleware' => 'auth'], function () {
    Route::get('/administrateur', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin-galerie', [AdminController::class, 'create'])->name('admin.galerie');
    Route::post('/admin-galerie-save', [AdminController::class, 'store'])->name('admin.galerie.store');
    Route::get('/admin-galerie-delete/{id}', [AdminController::class, 'destroy'])->name('admin.galerie.delete');
    Route::post('/admin-galerie-update', [AdminController::class, 'update'])->name('admin.galerie.update');
    Route::post('/admin-galerie-edit', [AdminController::class, 'edit'])->name('admin.galerie.edit');
    Route::get('/produit-create', [ProduitController::class, 'create'])->name('produit.create');
    Route::get('/produit-edit/{id}', [ProduitController::class, 'edit'])->name('admin.produit.edit');
    Route::get('/admin-image-delete/images/produits/{id}', [ProduitController::class, 'image_delete'])->name('admin.image.delete');
    Route::get('/service-create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/produit-store', [ProduitController::class, 'store'])->name('produit.store');
    Route::post('/service-store', [ServiceController::class, 'store'])->name('service.store');
    Route::post('/produit-update/{id}', [ProduitController::class, 'update'])->name('admin.produit.update');
    Route::post('/service-update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::post('/service-edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::get('/service-delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');
    Route::get('/admin-produit-all', [AdminController::class, 'produit'])->name('admin.produits');
    Route::get('/admin-satff', [UserController::class, 'index'])->name('admin.staff.index');
    Route::get('/admin-staff-create', [UserController::class, 'create'])->name('admin.staff.create');
    Route::post('/admin-staff-store', [UserController::class, 'store'])->name('admin.staff.store');
    Route::get('/admin-staff-delete/{id}', [UserController::class, 'destroy'])->name('admin.staff.delete');
    Route::get('/admin-staff-edit/{id}', [UserController::class, 'edit'])->name('admin.staff.edit');
    Route::post('/admin-staff-update', [UserController::class, 'update'])->name('admin.staff.update');
    Route::post('/admin-update-profile', [UserController::class, 'update'])->name('admin.staff.update.profile');
    Route::get('/admin-profile', [UserController::class, 'profile'])->name('admin.staff.profile');
    Route::get('/admin-profile-me', [UserController::class, 'profile_me'])->name('profile');
    // select controller
    Route::get('/search/{search}/{id}', [SelectController::class, 'search'])->name('search');
    Route::get('/selectMarque', [SelectController::class, 'marque']);
    Route::get('/selectModel', [SelectController::class, 'model']);
    Route::get('/selectCarburateur', [SelectController::class, 'carburateur']);
    // Commande controller
    Route::get('/admin-commandes', [CommandeController::class, 'index'])->name('commande.index');
    Route::get('/admin-commandes', [CommandeController::class, 'index'])->name('commande.index');
    Route::get('/admin-commande/{id}', [CommandeController::class, 'show'])->name('commande.show');
    Route::get('/admin-commande-accepte/{id}', [CommandeController::class, 'accepte'])->name('commande.accepte');
    Route::get('/admin-commande-annuler/{id}', [CommandeController::class, 'annuler'])->name('commande.annuler');
    Route::get('/admin-commande/delete/{id}', [CommandeController::class, 'destroy'])->name('commande.delete');
    // Create newslatter and message Controller
    Route::get('/admin-newslatter', [MessageController::class, 'newslatter'])->name('admin.newslatter');
    Route::post('/admin-sendnewslatter', [MessageController::class, 'sendnewslatter'])->name('admin.sendnewslatter');
});
// unauthentificate
Route::post('/client-commande/store', [CommandeController::class, 'store'])->name('commande.store');
Route::get('/', [HomeSiteController::class, 'index'])->name('index');
Route::get('/services', [HomeSiteController::class, 'service'])->name('home.services');
Route::get('/contact', [HomeSiteController::class, 'contact'])->name('home.contact');
Route::get('/apropos', [HomeSiteController::class, 'apropos'])->name('home.apropos');
Route::get('/galerie', [HomeSiteController::class, 'galerie'])->name('home.galerie');
Route::get('/produits', [ProduitController::class, 'index'])->name('produits.all');
Route::get('/produit-details/{id}', [ProduitController::class, 'show'])->name('produit.details');
Route::post('/create-newslatter', [MessageController::class, 'newslatterCreate'])->name('newslatterCreate');
Auth::routes();
Route::any('/register', function () {
    return  view('auth.login');
});
// Test
Route::get('/test', function () {
    return view('test');
});
Route::get('/mail', function () {
    $data = [
        'message' => request('message'),
        'image' =>  null,
        'object' => 'ooook'
    ];
    Mail::to('genesiskikimba@gmail.com')->send(new ClientMail($data));
});
Route::get('migration', function () {
    Artisan::call('migrate:refresh --seed');
});
Route::get('links', function () {
    Artisan::call('storage:link');
});
Route::get('caches', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
