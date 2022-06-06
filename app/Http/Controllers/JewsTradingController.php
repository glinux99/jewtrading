<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
        $produit = Produit::all();
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
        if (!request('count')) $count = 1;
        else $count = request('count');
        $tab = array();
        for ($i = 0; $i < $count; $i++) {
            $file = Str::random(5);
            $ext = $request->file1->getClientOriginalExtension();
            $fileName = $file . '.' . $ext;
            $path = $request->file('file1')->storeAs(
                'images',
                $fileName,
                'public'
            );
            array_push($tab, $fileName);
        }
        $files = implode(' ', $tab);
        $produit->file = $files;
        $produit->admin_id = Auth::user()->id;
        $produit->save();
        return redirect('admin');
    }
    private function countPhoto()
    {
        $tab = array();
        $galeries = Galerie::all();
        foreach ($galeries as $galerie) {
            $gal = explode(' ', $galerie->image);
            array_push($tab, $gal);
        }
        return array_sum(array_map('count', $tab));
    }
    public function admin()
    {
        $countServ = Service::all()->count();
        $countAgent = Agent::all()->count();
        $count = Galerie::all()->count();
        $countPhoto = JewsTradingController::countPhoto();
        $countProd = Produit::all()->count();
        $countUser = User::all()->count();
        return view('admin', compact([
            'countProd', 'countAgent', 'countServ',
            'countPhoto', 'countUser'
        ]));
        // echo $countPhoto;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produits = Produit::all();
        return view('admin.alter', ['produit' => true, 'produits' => $produits]);
    }
    public function activeModal($id)
    {
        $produits = Produit::all();
        $produitCurrent = Produit::findOrfail($id);
        session()->flash('produitAff', true);
        return view('admin.alter', ['produit' => true, 'produits' => $produits, 'produitCurrent' => $produitCurrent]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);
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
