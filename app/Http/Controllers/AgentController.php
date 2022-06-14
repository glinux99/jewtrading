<?php

namespace App\Http\Controllers;

use App\Models\Agent;
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
            // 'prenom_agent'
            // => 'required|string',
            // 'num_agent'
            // => 'required|string',
            // 'email_agent'
            // => 'required|string',
            // 'adresse_agent'
            // => 'required|string',
            // 'fonction'
            // => 'required|string'
        ]);
        if ($validate->fails()) {
            session()->flash('one_thing_not_running');
            return redirect()->back();
        }
        $agent = new Agent;
        AgentController::saveAgent($agent, $request);
        return view('admin');
    }
    // Fonction pour enregistrer les agents, un code fluid
    private function saveAgent($agent, $request)
    {
        $inputs = ['nom_agent', 'num_agent', 'email_agent', 'adresse_agent', 'fonction'];
        foreach ($inputs as $input) {
            $agent->$input = $request->$input;
        }
        if ($request->file1) {
            Storage::disk('public')->delete('images/agents' . $agent->image);
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
        return view('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agent::findOrfail($id)->delete();
        session()->flash('error', 'no_error');
        return view('admin');
    }
}
