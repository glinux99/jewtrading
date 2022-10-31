<?php

namespace App\Http\Controllers\Site;

use App\Models\Images;
use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupby('images.produit_id')->distinct()->paginate(20);
        return view('site.produit', ['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produit.produitCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = Produit::create($request->except(['_token']));
        if ($request->file('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/produits',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->produit_id = $produit->id;
                $imageSave->save();
            }
        }
        Session()->put('alert-produit', 'create-success');
        return \redirect()->route('admin.produits');
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
        $images = Images::where('produit_id', $id)->get();
        $produits = Produit::join('images', 'produit_id', 'produits.id')->groupby('images.produit_id')->distinct()->paginate(10);
        $produitsV = Produit::join('images', 'produit_id', 'produits.id')->groupby('images.produit_id')->distinct()->paginate(4);
        return view('site.detailsProduit', ['images' => $images, 'produit' => $produit, 'produits' => $produits, 'produitsV' => $produitsV]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::findOrfail($id)
            ->join('images', 'produit_id', 'produits.id')
            ->groupBy('produits.id')
            ->first();
        $images = Images::where('produit_id', $id)->get();
        // dd($produit->marque);
        return view('admin.produit.produitalter', ['produit_get' => $produit, 'images' => $images]);
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
        $produit = Produit::find($id)->update($request->except('_token', 'images'));
        $produit = Produit::find($id);
        if ($request->file('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/produits',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->produit_id = $produit->id;
                $imageSave->save();
            }
        }
        Session()->put('alert-session', 'produit-update');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function image_delete($image)
    {
        $image = Images::where('images', 'images/produits/' . $image)->first();

        $image->delete();
        Storage::disk('public')->delete($image->images);
        Session()->put('alert-session', 'image-delete');
        return redirect()->back();
    }
    public function destroy($id)
    {
        //
    }
}
