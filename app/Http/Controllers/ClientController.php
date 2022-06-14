<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newslatterCli = Client::where('newslatter', '1')->get();
        return view("admin.newslatter", ['newslatterCli' => $newslatterCli]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (request('newslatterAuth') === '1') {
            $newslatter = new Client;
            $newslatter->nom_cli = 'Client Newslatter';
            $newslatter->email_cli = request('newslatter');
            $newslatter->num_cli = '-';
            $newslatter->adresse_cli = "-";
            $newslatter->newslatter = "1";
            $newslatter->save();
            session()->flash('error', 'no_error');
            return redirect('/admin');
        }
    }
    public function sendnewslatter()
    {
        echo "NewsLatter";
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
    public function desactivate($id)
    {
        $desabonne = Client::findOrfail($id);
        $desabonne->newslatter = 0;
        $desabonne->save();
        session()->flash('error', 'no_error');
        return ClientController::index();
    }
    public function destroy($id)
    {
        Client::findOrfail($id)->delete();
        session()->flash('error', 'no_error');
        return ClientController::index();
    }
}
