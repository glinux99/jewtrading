<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $validate = Validator($request->all(), [
        //     'categories' => 'required'
        // ]);
        // if ($validate->fails()) {
        //     return redirect()->back();
        // }
        // $galerie = new Galerie;
        // $galerie->categories = request('categories');
        // $galerie->image = request('file1');
        // $galerie->save();
        // return redirect('admin');
        $file =
            $random = Str::random(5);;
        $ext = $request->file1->getClientOriginalExtension();
        $fileName = $file . '.' . $ext;
        Storage::disk('local')->put('images' . '/' . $fileName, $request->file);
        die();
        echo request('count');
        dd($request->file('file1'));
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
