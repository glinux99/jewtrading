<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'us')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $phone = explode('/', User::find(1)->contact);
        $prod = Produit::findOrfail($id);
        return view('contact', [
            'apropos' => $apropos,
            'missions' => $missions,
            'adresse' => User::find(1)->adresse, 'phones' => $phone, 'email' => User::find(1)->emailEntreprise, 'commande' => true, 'produitCommande' => $prod
        ]);
    }
    public function commandeview()
    {
        $commande = Commande::join('clients', 'clients.id', 'client_id')
            ->join('produits', 'code_prod', 'produits.id')
            ->select('commandes.*', 'commandes.id as cmd_id', 'clients.*', 'produits.*')->get();
        return view('admin.commande', ['commandes' => $commande]);
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
        $commande = Commande::findOrfail($id);
        $commande->confirme = "1";
        $commande->save();
        session()->flash('error', 'no_error');
        return CommandeController::commandeview();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = new Client;
        $inputs = ['nom_cli', 'email_cli', 'num_cli', 'adresse_cli'];
        foreach ($inputs as $input) {
            $client->$input = request($input);
        }
        $client->save();
        $commande = new Commande;
        $commande->client_id = Client::where('email_cli', request('email_cli'))->first()->id;
        $commande->quantity = 1;
        $commande->code_prod = $id;
        $commande->confirme = "0";
        $commande->save();
        session()->flash('error', 'no_error');
        $home = new HomeController;
        return $home->produit();
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
    public function annuler($id)
    {
        $commande = Commande::findOrfail($id);
        $commande->confirme = "2";
        $commande->save();
        session()->flash('error', 'no_error');
        return CommandeController::commandeview();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Commande::findOrfail($id)->delete();
        session()->flash('error', 'no_error');
        return CommandeController::commandeview();
    }
}
