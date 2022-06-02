<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Service;
use App\Models\Galerie;
use App\Models\User;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JewsTradingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = Validator($request->all(), [

            'marque' => 'required|string',
            // 'model' => 'required',
            // 'moteur' => 'required',
            // 'transmission' => 'required',
            // 'carburant' => 'required',
            // 'prix' => 'required',
            // 'file1' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back();
        }
        $produit = new Produit;
        $inputs = ['marque', 'kilometrage', 'annee_fab', 'moteur', 'transmission', 'carburateur', 'emplacement', 'model', 'prix', 'couleur', 'declaration'];
        foreach ($inputs as $input) {
            $produit->$input = request($input);
        }
        $produit->file = request('file1');
        $produit->admin_id = Auth::user()->id;
        $produit->save();
        return redirect('admin');
        /*
                $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/uploads');
        $save = new Image;
        $save->name = $name;
        $save->path = $path;
        $save->save();
        */
    }
    public function admin()
    {
        $countServ = Service::all()->count();
        $countAgent = Agent::all()->count();
        $countPhoto = Galerie::all()->count();
        $countProd = Produit::all()->count();
        $countUser = User::all()->count();
        return view('admin', compact([
            'countProd', 'countAgent', 'countServ',
            'countPhoto', 'countUser'
        ]));
    }
    public function ajouteAgent(Request $request)
    {
        $validate = Validator($request->all(), [

            'nom_agent' => 'required|string',
            // 'prenom_agent'
            // => 'required|string',
            // 'num_agent'
            // => 'required|string',
            // 'email_agent'
            // => 'required|string',
            // 'adresse_agent'
            // => 'required|string',
            // 'fonction'
            // => 'required|string'
        ]);
        if ($validate->fails()) {
            return redirect()->back();
        }
        $agent = new Agent;
        $inputs = ['nom_agent', 'num_agent', 'email_agent', 'adresse_agent', 'fonction'];
        foreach ($inputs as $input) {
            $agent->$input = request($input);
        }
        $agent->image = '';
        $agent->save();
        return redirect('admin');
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
