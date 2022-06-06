<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        $galery = '';
        $i = 0;
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
        } else $galeriePic = array();
        return view('admin.galerieAddAlter', ['galeries' => $galeriePic]);
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
                'images',
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
        $galeries = Galerie::all();
        foreach ($galeries as $galerie) {
            $gal = Galerie::find($galerie->id);
            $gal->image = str_replace($id, " ", $galerie->image);
            $gal->save();
            echo $galerie->id;
            if (strlen($gal->image) < 4) echo ' long=>' . strlen($gal->image) . 'x';
        }
    }
}
