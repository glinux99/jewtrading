<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        $JewsTrdetails = User::find(1);
        $JewsTrservices = Service::all();
        $JewsTrgaleries = Galerie::all();
        $Jewstab = array();
        $path = '/storage/images/galeries/';
        $showProduits = array();
        $galerieShowAll = HomeController::photo(Galerie::where('categories', 'Produit')->get(), $path)[0];
        foreach (Produit::all() as $agents) {
            // array_push($showProduits, );
            $path = '/storage/images/produits/';
            if ($agents->file1 != '') array_push($showProduits, $path . $agents->file1);
        }
        foreach ($showProduits as $prod) {
            array_push($galerieShowAll, $prod);
        }
        return view('index', ['jewtrading' => $JewsTrdetails, 'services' => $JewsTrservices, 'galeries' => $galerieShowAll, 'apropos' => $apropos, 'missions' => $missions, 'adresse' => $adresse, 'phones' => $phone, 'email' => $email]);
    }
    public function photo($JewsTrgaleries, $path)
    {
        $Jewstab = array();
        $comment = array();
        foreach ($JewsTrgaleries as $galerie) {
            $gal = explode(' ', $galerie->image);
            array_push($Jewstab, $gal);
            array_push($comment, $galerie->comments);
        }
        $galeriePic = array();
        $comments = array();
        for ($x = 0; $x < count($Jewstab); $x++) {
            for ($z = 0; $z < count($Jewstab[$x]); $z++) {
                array_push($galeriePic, $path . $Jewstab[$x][$z]);
                array_push($comments, $comment[$x]);
            }
        }
        return [$galeriePic, $comments];
    }
    public function detailProduit()
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        return view('detailsProduits', compact(['apropos', 'missions', 'email', 'adresse', 'phones']));
    }
    public function service()
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        $JewsTrgaleries = Galerie::where('categories', 'Produit')->get();
        $path = '/storage/images/galeries/';
        $galeriePic = HomeController::photo($JewsTrgaleries, $path)[0];
        $JewsTrservices = Service::all();
        return view('service', [
            'apropos' => $apropos,
            'missions' => $missions,
            'email' => $email,
            'adresse' => $adresse,
            'phones' => $phone,
            'services' => $JewsTrservices, 'galeries' => $galeriePic
        ]);
    }
    public function galerie()
    {

        $path = '/storage/images/galeries/';
        $showEquipes = HomeController::photo(Galerie::where('categories', 'Equipe')->get(), $path)[0];
        $showEquipesC = HomeController::photo(Galerie::where('categories', 'Equipe')->get(), $path)[1];
        $path = '/storage/images/agents/';
        foreach (HomeController::photo(Agent::all(), $path)[0] as $agents) {
            array_push($showEquipes, $agents);
            array_push($showEquipesC, '');
        }
        $path = '/storage/images/galeries/';
        $showClients = HomeController::photo(Galerie::where('categories', 'client')->get(), $path)[0];
        $showClientsC = HomeController::photo(Galerie::where('categories', 'client')->get(), $path)[1];
        $path = '/storage/images/galeries/';
        $showProduits = HomeController::photo(Galerie::where('categories', 'Produit')->get(), $path)[0];
        $showProduitsC = HomeController::photo(Galerie::where('categories', 'Produit')->get(), $path)[1];
        foreach (Produit::all() as $agents) {
            // array_push($showProduits, );
            $path = '/storage/images/produits/';
            if ($agents->file1 != '') {
                array_push($showProduits, $path . $agents->file1);
                array_push($showProduitsC, '');
            }
        }
        $path = '/storage/images/galeries/';
        $showOthers = HomeController::photo(Galerie::where('categories', 'autres')->get(), $path)[0];
        $showOthersC = HomeController::photo(Galerie::where('categories', 'autres')->get(), $path)[1];
        $galerieShowAll = HomeController::photo(Galerie::all(), $path)[0];
        $galerieShowAllC = HomeController::photo(Galerie::all(), $path)[1];
        foreach ($showProduits as $prod) {
            array_push($galerieShowAll, $prod);
            array_push($galerieShowAllC, '');
        }
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        $galerieShowAll = $this->paginate($galerieShowAll);
        return view('galerie', [
            'apropos' => $apropos,
            'missions' => $missions,
            'email' => $email,
            'adresse' => $adresse,
            'phones' => $phone,
            'galerieShowAll' => $galerieShowAll,
            'galerieShowAllC' => $galerieShowAllC,
            'equipes' => $showEquipes,
            'equipesC' => $showEquipesC,
            'showClients' => $showClients,
            'showClientsC' => $showClientsC,
            'produits' => $showProduits,
            'produitsC' => $showProduitsC,
            'autres' => $showOthers,
            'autresC' => $showOthersC
        ]);
    }


    /**3
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produit($search = null)
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        $produits = array();
        foreach (Produit::all() as $prod) {
            $path = '/storage/images/produits/';
            if ($prod->file1 != '') $file = $path . $prod->file1;
            else if ($prod->file2 != '') $file = $path . $prod->file2;
            else if ($prod->file3 != '') $file = $path . $prod->file3;
            else if ($prod->file4 != '') $file = $path . $prod->file4;
            array_push($produits, [$prod->marque, $prod->prix, $prod->id, $file]);
        }
        $produitSearch = null;
        if ($search != null) {
            $produitSearch = array();
            foreach ($search as $prod) {
                $path = '/storage/images/produits/';
                if ($prod->file1 != '') $file = $path . $prod->file1;
                else if ($prod->file2 != '') $file = $path . $prod->file2;
                else if ($prod->file3 != '') $file = $path . $prod->file3;
                else if ($prod->file4 != '') $file = $path . $prod->file4;
                array_push($produitSearch, [$prod->marque, $prod->prix, $prod->id, $file]);
            }
        }
        $choice =
            Produit::select('marque', 'model')
            ->distinct()
            ->get();
        //dd($choiceMarque);
        return view('produit', [
            'apropos' => $apropos,
            'missions' => $missions,
            'email' => $email,
            'adresse' => $adresse,
            'phones' => $phone,
            'produits' => $produits,
            'choice' => $choice,
            'search' => $produitSearch,
        ]);
    }
    public function apropos()
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        $agents = array();
        foreach (Agent::all() as $agent) {
            $path = '/storage/images/agents/';

            array_push($agents, [$agent->nom_agent, $agent->fonction, $path . $agent->image]);
        }
        return view('apropos', ['email' => $email, 'phones' => $phone, 'adresse' => $adresse, 'apropos' => $apropos, 'missions' => $missions, 'agents' => $agents]);
    }
    public function contact()
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        return view('contact', ['adresse' => User::find(1)->adresse, 'apropos' => $apropos, 'missions' => $missions, 'phones' => $phone, 'email' => User::find(1)->emailEntreprise]);
    }
    public function paginate($items, $perPage = 9, $page = null, $options = [])

    {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
