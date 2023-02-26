<?php

namespace App\Http\Controllers\adminjews;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Console\Command;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commande::where('confirme', '0')
            ->join('clients', 'client_id', 'clients.id')
            ->join('produits', 'produit_id', 'produits.id')
            ->select('commandes.*', 'commandes.id AS cmd_id', 'clients.*', 'produits.*')
            ->get();
        $allcommandes =
            Commande::where('confirme', '1')
            ->join('clients', 'client_id', 'clients.id')
            ->join('produits', 'produit_id', 'produits.id')
            ->select('commandes.*', 'commandes.id AS cmd_id', 'clients.*', 'produits.*')
            ->get();
        $commandesannuler =
            Commande::where('confirme', '2')
            ->join('clients', 'client_id', 'clients.id')
            ->join('produits', 'produit_id', 'produits.id')
            ->select('commandes.*', 'commandes.id AS cmd_id', 'clients.*', 'produits.*')
            ->get();
        return view('admin.commands.commande', [
            'commandes' => $commandes,
            'commandesaccepte' => $allcommandes,
            'commandesannuler' => $commandesannuler
        ]);
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
        if (!Client::where('email', $request->email)->first())
            $client = Client::create($request->except('_token'));
        else  $client = Client::where('email', $request->email)->first();
        Commande::create(
            [
                'client_id' => $client->id,
                'produit_id' => $request->produit_id,
                'quantite' => 1,
                'confirme' => 0
            ]
        );
        Session()->put('alert-session', 'commande-create');
        return redirect()->route('produits.all');
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
    public function accepte($id)
    {
        Commande::find($id)->update(['confirme' => '1']);
        Session()->put('alert-session', 'commande-accepte');
        return redirect()->route('commande.index');
    }
    public function annuler($id)
    {
        Commande::find($id)->update(['confirme' => '2']);
        Session()->put('alert-session', 'commande-annuler');
        return redirect()->route('commande.index');
    }
    public function destroy($id)
    {
        Commande::findOrfail($id)->delete();
        Session()->put('alert-session', 'commande-delete');
        return redirect()->route('commande.index');
    }
}
