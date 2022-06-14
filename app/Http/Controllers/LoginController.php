<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

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
            return redirect()->back();
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
    public function update(Request $request)
    {
        $validate = Validator($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);
        if ($request->psswd != '') {
            $validate = Validator($request->all(), [
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
        $user->emailEntreprise = request('emailEntreprise');
        $user->description = request('mission');
        $user->apropos = request('apropos');
        $user->password = $psswd;
        $user->save();
        session()->flash('error', 'no_error');
        return redirect('admin');
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
            return redirect('admin');
        }
        session()->flash('error', 'no_autorization');
        return view('admin.login', compact(['apropos', 'missions', 'email', 'adresse', 'phones']));
    }
    public function connect(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->psswd]) || Auth::attempt(['name' => $request->email, 'password' => $request->psswd])) {
            return redirect('admin');
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
}
