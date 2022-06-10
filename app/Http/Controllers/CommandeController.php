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
        $phone = explode('/', User::find(1)->contact);
        $prod = Produit::findOrfail($id);
        return view('contact', ['adresse' => User::find(1)->adresse, 'phones' => $phone, 'email' => User::find(1)->emailEntreprise, 'commande' => true, 'produitCommande' => $prod]);
    }
    public function commandeview()
    {
        $commande = Commande::join('client', 'client->id', '=', 'client_id');
        dd($commande->get());
        // return view('admin.commande');
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
        $commande->save();
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
