<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Email;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JewsTradingController;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function confirmeLog(Request $request)
    {

        if (Auth::attempt(['email' => Auth::User()->email, 'password' => $request->psswd])) {
            return view('admin.parametre');
        } else {
            session()->flash('error', 'one_thing_not_running');
            return view('admin.confirme');
        }
    }
    public function confirmPass()
    {
        return view('admin.confirme');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parametre');
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
    public function update(Request $request)
    {
        $validate = Validator($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);
        if ($request->psswd != '') {
            Validator($request->all(), [
                'psswd' => 'required|min:6|max:255',
            ]);
            $psswd = bcrypt(request('psswd'));
        } else $psswd = Auth::User()->password;
        $user = User::find(Auth::User()->id);
        $user->name = request('name');
        $user->email = request('email');
        $user->number = request('number');
        $user->lang = request('lang');
        $user->contact = request('contact');
        $user->adresse = request('adresse');
        $user->partenaires = request('partenaires');
        $user->emailEntreprise = request('emailEntreprise');
        $descUS = request('mission');
        $aproposUS = request('apropos');
        if (strlen(request('missionUS')) > 2) {
            $descUS = request('missionUS');
        } else {
            $descUS = request('mission');
        }
        if (strlen(request('aproposUS')) > 2) {
            $aproposUS = request('aproposUS');
        } else {
            $aproposUS = request('apropos');
        }
        $user->description = request('mission');
        $user->apropos = request('apropos');
        $user->aproposUS = $aproposUS;
        $user->descriptionUS = $descUS;
        $user->password = $psswd;
        $user->save();
        session()->flash('error', 'no_error');
        return LoginController::admin();
    }
    public function login()
    {
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'us')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phones = explode('/', User::find(1)->contact);
        if (auth()->check()) {
            return redirect('/admin');
        }
        session()->flash('error', 'no_autorization');
        return view('admin.login', compact(['apropos', 'missions', 'email', 'adresse', 'phones']));
    }
    public function connect(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->psswd]) || Auth::attempt(['name' => $request->email, 'password' => $request->psswd])) {
            return LoginController::admin();
        } else {
            session()->flash('error', 'no_autorization');
            return redirect()->back();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
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
        return view('admin', compact([
            'countProd', 'countAgent', 'countServ',
            'countPhoto', 'countUser', 'message_R', 'count_A',
            'count_V', 'count_T'
        ]));
    }
}
