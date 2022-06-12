<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Commande;
use App\Models\Email;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        $produits = Produit::all();
        return view('admin.alter', ['affprod' => true, 'produits' => $produits]);
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
        $filesInput = ['file1', 'file2', 'file3', 'file4'];
        foreach ($filesInput as $fileInput) {
            if (request($fileInput) != '') {
                $file = Str::random(5);
                $ext = request($fileInput)->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $request->file($fileInput)->storeAs(
                    'images/produits',
                    $fileName,
                    'public'
                );
                $produit->$fileInput = $fileName;
            } else
                $produit->$fileInput = '';
        }
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
        $message_R = Email::all();
        $count_V = (Commande::where('confirme', 1)->count());
        $count_A = (Commande::where('confirme', 2)->count());
        $count_T = Commande::orderBy('created_at', 'DESC')
            ->select('id')->first();
        $count_D = (intval($count_T) - $count_V - $count_A);
        return view('admin', compact([
            'countProd', 'countAgent', 'countServ',
            'countPhoto', 'countUser', 'message_R', 'count_A',
            'count_V', 'count_T', 'count_D'
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
        return view('admin.add');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentProduit = Produit::find($id);
        if ($currentProduit == null) {
            return redirect('/');
        }
        // echo $currentProduit->file1;
        return view('detailsProduits', ['produit' => $currentProduit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produits = Produit::all();
        $produitCurrent = Produit::findOrfail($id);
        session()->flash('produitAff', true);
        return view('admin.alter', ['prod' => true, 'affprod' => true, 'produits' => $produits, 'produitCurrent' => $produitCurrent]);
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
        $produit = Produit::findOrfail($id);
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
        $inputs = ['marque', 'kilometrage', 'annee_fab', 'moteur', 'transmission', 'carburateur', 'emplacement', 'model', 'prix', 'couleur', 'declaration'];
        foreach ($inputs as $input) {
            $produit->$input = request($input);
        }
        $produit->admin_id = Auth::User()->id;
        // $produit->file1 = $produit->file;
        $produit->save();
        return JewsTradingController::index();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produit::findOrfail($id)->delete();
        return redirect('/admin');
    }
}
