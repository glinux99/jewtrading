<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JewsTrdetails = User::find(1);
        $JewsTrservices = Service::all();
        $JewsTrgaleries = Galerie::all();
        $Jewstab = array();
        $path = '/storage/images/galeries/';
        $galeriePic = HomeController::photo($JewsTrgaleries, $path);
        return view('index', ['jewtrading' => $JewsTrdetails, 'services' => $JewsTrservices, 'galeries' => $galeriePic]);
    }
    public function photo($JewsTrgaleries, $path)
    {
        $Jewstab = array();
        foreach ($JewsTrgaleries as $galerie) {
            $gal = explode(' ', $galerie->image);
            array_push($Jewstab, $gal);
        }
        $galeriePic = array();
        for ($x = 0; $x < count($Jewstab); $x++) {
            for ($z = 0; $z < count($Jewstab[$x]); $z++) {
                array_push($galeriePic, $path . $Jewstab[$x][$z]);
            }
        }
        return $galeriePic;
    }
    public function service()
    {
        $JewsTrgaleries = Galerie::all();
        $path = '/storage/images/galeries/';
        $galeriePic = HomeController::photo($JewsTrgaleries, $path);
        $JewsTrservices = Service::all();
        return view('service', ['services' => $JewsTrservices, 'galeries' => $galeriePic]);
    }
    public function galerie()
    {
        $path = '/storage/images/galeries/';
        $showEquipes = HomeController::photo(Galerie::where('categories', 'Equipe')->get(), $path);
        $path = '/storage/images/agents/';
        foreach (HomeController::photo(Agent::all(), $path) as $agents) {
            array_push($showEquipes, $agents);
        }
        $path = '/storage/images/galeries/';
        $showClients = HomeController::photo(Galerie::where('categories', 'client')->get(), $path);
        $path = '/storage/images/galeries/';
        $showProduits = HomeController::photo(Galerie::where('categories', 'Produit')->get(), $path);
        foreach (Produit::all() as $agents) {
            // array_push($showProduits, );
            $path = '/storage/images/produits/';
            if ($agents->file1 != '') array_push($showProduits, $path . $agents->file1);
        }
        $path = '/storage/images/galeries/';
        $showOthers = HomeController::photo(Galerie::where('categories', 'autres')->get(), $path);
        $galerieShowAll = HomeController::photo(Galerie::all(), $path);
        return view('galerie', [
            'galerieShowAll' => $galerieShowAll,
            'equipes' => $showEquipes,
            'showClients' => $showClients,
            'produits' => $showProduits,
            'autres' => $showOthers
        ]);
    }
    /**3
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produit()
    {
        $produits = array();
        foreach (Produit::all() as $prod) {
            $path = '/storage/images/produits/';
            if ($prod->file1 != '') $file = $path . $prod->file1;
            else if ($prod->file2 != '') $file = $path . $prod->file2;
            else if ($prod->file3 != '') $file = $path . $prod->file3;
            else if ($prod->file4 != '') $file = $path . $prod->file4;
            array_push($produits, [$prod->marque, $prod->prix, $prod->id, $file]);
        }
        return view('produit', ['produits' => $produits]);
    }
    public function apropos()
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        $agents = array();
        foreach (Agent::all() as $agent) {
            $path = '/storage/images/agents/';

            array_push($agents, [$agent->nom_agent, $agent->fonction, $path . $agent->image]);
        }
        return view('apropos', ['apropos' => $apropos, 'missions' => $missions, 'agents' => $agents]);
    }
    public function contact()
    {
        $phone = explode('/', User::find(1)->contact);
        return view('contact', ['adresse' => User::find(1)->adresse, 'phones' => $phone, 'email' => User::find(1)->emailEntreprise]);
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
