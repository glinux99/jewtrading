<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Email;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
        return view('admin.alter', ['agents' => $agents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = Validator($request->all(), [

            'nom_agent' => 'required|string',
            'num_agent' => 'required',
            'email_agent' => 'required|string',
            'adresse_agent' => 'required|string',
            'fonction' => 'required|string',
            'file1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validate->fails()) {
            session()->flash('one_thing_not_running');
            return redirect()->back();
        }
        $agent = new Agent;
        AgentController::saveAgent($agent, $request);
        return redirect('/admin');
    }
    // Fonction pour enregistrer les agents, un code fluid
    private function saveAgent($agent, $request)
    {
        $inputs = ['nom_agent', 'num_agent', 'email_agent', 'adresse_agent', 'fonction'];
        foreach ($inputs as $input) {
            $agent->$input = $request->$input;
        }
        if ($request->file1) {
            Storage::disk('public')->delete('images/agents/' . $agent->image);
            $file = Str::random(5);
            $ext = $request->file1->getClientOriginalExtension();
            $fileName = $file . '.' . $ext;
            $request->file('file1')->storeAs(
                'images/agents',
                $fileName,
                'public'
            );
            $agent->image = $fileName;
        }
        $agent->save();
        session()->flash('error', 'no_error');
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
        $agent = Agent::findOrfail($id);
        $agents = Agent::all();
        session()->flash('agentAff', true);
        return view('admin.alter', ['agents' => $agents, 'agentChange' => $agent]);
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
        $agent = Agent::findOrfail($id);
        AgentController::saveAgent($agent, $request);
        return AgentController::admin();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent = Agent::findOrfail($id);
        Agent::findOrfail($id)->delete();
        Storage::disk('public')->delete('images/agents/' . $agent->image);
        session()->flash('error', 'no_error');
        return AgentController::admin();
    }
    public function admin()
    {
        $countServ = Service::all()->count();
        $countAgent = Agent::all()->count();
        $count = Galerie::all()->count();
        $pic = new JewsTradingController;
        $countPhoto = $pic->countPhoto();
        $countProd = Produit::all()->count();
        $countUser = User::all()->count();
        $message_R = Email::all();
        $count_V = (Commande::where('confirme', 1)->count());
        $count_A = (Commande::where('confirme', 2)->count());
        $count_T = Commande::orderBy('created_at', 'DESC')
            ->select('id')->first();
        session()->flash('error', 'no_error');
        return view('admin', compact([
            'countProd', 'countAgent', 'countServ',
            'countPhoto', 'countUser', 'message_R', 'count_A',
            'count_V', 'count_T'
        ]));
    }
}
