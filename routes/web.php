<?php

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
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/addProduit', function () {
    return view('admin.add', ['#addProduit']);
});
Route::get('/alterProduit', function () {
    return view('admin.alter', ['#addProduit']);
});
