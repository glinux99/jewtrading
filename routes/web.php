<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Site\ProduitController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\HomeSiteController;

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
    Route::get('/service-create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/produit-store', [ProduitController::class, 'store'])->name('produit.store');
    Route::post('/service-store', [ServiceController::class, 'store'])->name('service.store');
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
});
// Authentificate
Route::get('/', [HomeSiteController::class, 'index'])->name('index');
Route::get('/services', [HomeSiteController::class, 'service'])->name('home.services');
Route::get('/contact', [HomeSiteController::class, 'contact'])->name('home.contact');
Route::get('/apropos', [HomeSiteController::class, 'apropos'])->name('home.apropos');
Route::get('/galerie', [HomeSiteController::class, 'galerie'])->name('home.galerie');
Route::get('/produits', [ProduitController::class, 'index'])->name('produits.all');
Route::get('/produit-details/{id}', [ProduitController::class, 'show'])->name('produit.details');
Route::get('/produit-detail/{id}', [ProduitController::class, 'show'])->name('produit.detail');
Auth::routes();
Route::any('/register', function () {
    return  view('auth.login');
});
// Test
Route::get('/test', function () {
    return view('test');
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
