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
use App\Http\Controllers\JewsTradingController;

class MessageController extends Controller
{
    public function index()
    {
        $clients = Email::all();
        $discussionCli = Email::latest('created_at')->get();
        return view('admin.messages', ['clients' => $clients, 'discussionCli' => $discussionCli]);
    }
    public function contact(Request $request)
    {
        $message = new Email;
        $Input = ['email', 'numero', 'nom', 'object', 'messages'];
        foreach ($Input as $in) {
            $message->$in = request($in);
        }
        $message->save();
        session()->flash('error', 'no_error');
        return \redirect('/');
    }
    public function destroy($id)
    {
        Email::findOrfail($id)->delete();
        session()->flash('error', 'no_error');
        return MessageController::admin();
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
