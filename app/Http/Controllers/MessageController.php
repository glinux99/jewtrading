<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Email;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Mail\messageCli;
use App\Models\Commande;
use App\Models\Commentaire;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JewsTradingController;

class MessageController extends Controller
{
    public function index()
    {
        $clients = Email::all();
        $discussionCli = Email::latest('created_at')->first();
        return view('admin.messages', ['clients' => $clients, 'message' => $discussionCli]);
    }
    public function contact(Request $request)
    {
        $message = new Email;
        $Input = ['email', 'numero', 'nom', 'object', 'messages'];
        foreach ($Input as $in) {
            $message->$in = request($in);
        }
        $message->save();
        session()->flash('error', 'message');
        $homeController = new HomeController();
        return $homeController->contact();
    }
    public function message($id)
    {
        $clients = Email::all();
        $discussionCli = Email::where('id', $id)->first();
        return view('admin.messages', ['clients' => $clients, 'message' => $discussionCli]);
    }
    public function envoyer_message(Request $request)
    {
        $rep = Email::where('id', request('id'))->first();
        $data = [
            'object' => 'JEW TRADING',
            'message' => request('reponse')
        ];
        Mail::to($rep->email)->send(new messageCli($data));
        $rep->reponse = request('reponse');
        $rep->save();
        return MessageController::message(request('id'));
    }
    public function comment_admin()
    {
        $comments = Commentaire::paginate(5);
        return view('admin.alter', ['comment' => true, 'comments' => $comments]);
    }
    public function destroy($id)
    {
        Email::findOrfail($id)->delete();
        session()->flash('error', 'no_error');
        return MessageController::admin();
    }
    public function comment_admin_remove($id)
    {
        $img = Commentaire::findOrfail($id)->image;
        Commentaire::find($id)->delete();
        Storage::disk('public')->delete('images/comments/' . $img);
        session()->flash('error', 'no_error');
        return MessageController::comment_admin();
    }
    public function commentaire(Request $request, $id)
    {
        $imageName = $id;
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        $comment = new Commentaire;
        $comment->name = $imageName;
        $comment->nom_cli = request('nom_cli');
        $comment->adresse_mail = request('adresse_mail');
        $comment->commentaires = request('commentaires');
        if (request('image') != '') {
            $file = Str::random(5);
            $ext = request('image')->getClientOriginalExtension();
            $fileName = $file . '.' . $ext;
            $path = request('image')->storeAs(
                'images/comments',
                $fileName,
                'public'
            );
            $comment->image = $fileName;
        }

        $comment->save();
        $comment = Commentaire::where('name', $imageName)->get();
        session()->flash('error', 'client_comment');
        return view('commentaires', ['commentaires' => $comment, 'photo' => '/storage/images/galeries/' . $imageName, 'adresse' => User::find(1)->adresse, 'apropos' => $apropos, 'missions' => $missions, 'phones' => $phone, 'email' => User::find(1)->emailEntreprise]);
    }
    public function commentaires($id)
    {
        $imageName = $id;
        if ($id != '') session()->put('id_comment', $id);
        else $imageName = session('id_comment');
        $apropos = User::find(1)->apropos;
        $missions = User::find(1)->description;
        if ((session()->get('lang_code') == 'en')) {
            $apropos = User::find(1)->aproposUS;
            $missions = User::find(1)->descriptionUS;
        }
        $email = User::find(1)->emailEntreprise;
        $adresse = User::find(1)->adresse;
        $phone = explode('/', User::find(1)->contact);
        $imageCurrent = Commentaire::where('name', $id)->first();
        if ($imageCurrent) {
            $comment = Commentaire::where('name', $id)->get();
            return view('commentaires', ['commentaires' => $comment, 'photo' => '/storage/images/galeries/' . $imageName, 'adresse' => User::find(1)->adresse, 'apropos' => $apropos, 'missions' => $missions, 'phones' => $phone, 'email' => User::find(1)->emailEntreprise]);
        } else {
            $comment = Commentaire::where('name', $imageName)->get();
            return view('commentaires', ['commentaires' => $comment, 'photo' => '/storage/images/galeries/' . $imageName, 'adresse' => User::find(1)->adresse, 'apropos' => $apropos, 'missions' => $missions, 'phones' => $phone, 'email' => User::find(1)->emailEntreprise]);
        }
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
