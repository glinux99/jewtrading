<?php

namespace App\Http\Controllers\admin;

use App\Models\Images;
use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function config()
    {
        $image = Images::where('user_id', Auth::id())->first();
        if (Auth::user() && $image) {
            $img = 'storage/' . $image->images;
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
        AdminController::config();
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
        $galeries = Images::where('images.galerie', '!=', null)->get();
        return view('admin.galerie', ['galeries' => $galeries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/galerie',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->galerie = $request->categorie;
                $imageSave->description = $request->description;
                $imageSave->save();
            }
        }
        return redirect()->route('admin.galerie');
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
        $image = Images::find($id);
        if ($image->images != "assets/img/default.png") {
            Storage::disk('public')->delete($image->images);
        }
        Images::find($id)->delete();
        return redirect()->route('admin.galerie');
    }
}
