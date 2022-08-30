<?php

namespace App\Http\Controllers\admin;

use App\Models\Images;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function config()
    {
        if (Auth::user() && Images::find(Auth::id())) {
            $img = Images::find(Auth::id())->paginate(1);
        } else $img = "assets/img/default.png";
        Session()->put('picprofile', $img);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupby('images.produit_id')->distinct()->paginate(10);
        return view('admin.admin', ['produits' => $produits]);
    }
    public function produit()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupby('images.produit_id')->distinct()->paginate();
        return view('admin.produit.produitAll', ['produits' => $produits]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
