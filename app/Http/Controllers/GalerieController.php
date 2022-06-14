<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Collection;

use Illuminate\Pagination\LengthAwarePaginator;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tab = array();
        $galeries = Galerie::all();
        foreach ($galeries as $galerie) {
            $gal = explode(' ', $galerie->image);
            array_push($tab, $gal);
        }
        $y = 0;
        if (Galerie::all()->count()) {
            $galeriePic = array();
            for ($x = 0; $x < count($tab); $x++) {
                for ($z = 0; $z < count($tab[$x]); $z++) {
                    array_push($galeriePic, $tab[$x][$z]);
                }
            }
            $galeriePic = $this->paginate($galeriePic);
        } else $galeriePic = array();
        return view('admin.galerieAddAlter', ['galeries' => $galeriePic]);
    }

    public function paginate($items, $perPage = 9, $page = null, $options = [])

    {


        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);
        // dd($items->forPage($page, $perPage));
        // cette fonction  a ete modifier pour permettre a ce que les liens
        // Puissent etre accepte! En cas d'utilisation de ce code, je vous recommande de modifier ce code par:
        //  $this->path = $this->path !== '/$' ? rtrim($this->path, '/$') : $this->path;
        // Par  $this->path = $this->path !== '/' ? rtrim($this->path, '/') : $this->path;
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = Validator($request->all(), [
            'categories' => 'required'
        ]);
        //'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        if ($validate->fails()) {
            return redirect()->back();
        }
        $galerie = new Galerie;
        $galerie->categories = request('categories');
        if (!request('count')) $count = 1;
        else $count = request('count');
        $tab = array();
        for ($i = 0; $i < $count; $i++) {
            $file = Str::random(5);
            $ext = $request->file1->getClientOriginalExtension();
            $fileName = $file . '.' . $ext;
            $path = $request->file('file1')->storeAs(
                'images/galeries',
                $fileName,
                'public'
            );
            // Storage::putFileAs('photos', new File($request->file1), $fileName);
            //Storage::disk('public')->putFile('', $request->file1, $fileName);
            array_push($tab, $fileName);
        }
        $files = implode(' ', $tab);
        $galerie->image = $files;
        $galerie->save();
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
        $tab = array();
        // $galeries = Galerie::all();
        // foreach ($galeries as $galerie) {
        //     // Suppressions une a une d'une photo selectionner par l'admin
        //     $gal = Galerie::find($galerie->id);
        //     $tab = explode(' ', $galerie->image);
        //     array_splice($tab, array_search($id, $tab), 1);
        //     $gal->image = implode(' ', $tab);
        //     $gal->save();
        //     $gal = Galerie::find($galerie->id);
        //     Storage::disk('public')->delete('images/galeries' . $id);
        //     if (strlen($gal->image) < 4) $gal->delete();
        //     return redirect('/admin');
        // }
        $galeries = Galerie::all();
        foreach ($galeries as $galerie) {
            $gal = Galerie::findOrfail($galerie->id);
            $galerie = explode(' ', $galerie->image);
            // array_slice($galerie, array_search($id, $galerie), 1);
            array_splice($galerie, array_search($id, $galerie), 1);
            $gal->image = implode(' ', $galerie);
            $gal->save();
            if (strlen($gal->image < 4)) $gal->delete();
            Storage::disk('public')->delete('images/galeries' . $id);
            return redirect('/admin');
        }
    }
}
