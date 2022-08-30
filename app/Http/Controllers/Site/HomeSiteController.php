<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Models\Images;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Images::groupby('images.produit_id')->distinct()->get();
        return view('site.home', ['galeries' => $galeries]);
    }
    public function service()
    {
        $services = Service::all();
        return view('site.service', ['services' => $services]);
    }
    public function galerie()
    {
        $galeries = Images::where('images', '!=', 'assets/img/default.png')->paginate(20);
        $staff = User::role('staff')->join('images', 'images.user_id', 'users.id')
            ->where('images', '!=', 'assets/img/default.png')->get();
        return view('site.galerie', ['galeries' => $galeries, 'staff' => $staff]);
    }
    public function apropos()
    {
        return   view('site.apropos');
    }
    public function contact()
    {
        return view('site.contact');
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
