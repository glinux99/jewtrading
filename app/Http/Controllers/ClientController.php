<?php

namespace App\Http\Controllers;

use Newsletter;
use App\Models\User;
use App\Models\Agent;
use App\Models\Email;
use App\Models\Client;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Mail\ClientMail;
use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ClientMarkdownMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use \DrewM\MailChimp\MailChimp as MailChimp;
use App\Http\Controllers\JewsTradingController;
use Exception;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newslatterCli = Client::where('newslatter', '1')
            ->orWhere('newslatter', '0')->get();
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
            // if (!Newsletter::isSubscribed(request('newslatter'))) {
            //     Newsletter::subscribePending(request('newslatter'));
            // }

            return back();
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
        // echo $countPhoto;
    }
    public function sendnewslatter(Request $request)
    {
        $validate = Validator($request->all(), [
            'object' => 'required',
            'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validate->fails()) {
            session()->flash('error', 'one_thing_not_running');
            return redirect()->back();
        }
        $path = '';
        $path_all = array();
        if (request('file') != '') {
            foreach (request('file') as $fichier) {
                $file = Str::random(5);
                $ext = $fichier->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $fichier->storeAs(
                    'images/emails',
                    $fileName,
                    'public'
                );
                array_push($path_all, $path);
            }
        }
        $object = "JEW TRADING CARS";
        if (request('object') != '') {
            $object = request('object');
        }
        $data = [
            'message' => request('message'),
            'image' =>  $path_all,
            'object' => $object
        ];
        $mail = Client::where('newslatter', 1)->select('email_Cli')->get();
        $newslatter = array();
        foreach ($mail as $email) {
            array_push($newslatter, $email->email_Cli);
        }
        Mail::to($newslatter)->send(new ClientMail($data));
        try {
            foreach ($path_all as $path) {
                Storage::disk('public')->delete('images/emails/' . $path);
            }
        } catch (Exception $ex) {
            session()->flash('error', 'one_thing_not_running');
            return ClientController::index();
        }
        $newslatterCli = Client::where('newslatter', '1')
            ->orWhere('newslatter', '0')->get();
        session()->flash('error', 'message');
        return view("admin.newslatter", ['newslatterCli' => $newslatterCli]);
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
        // Newsletter::unsubscribe($desabonne->email_Cli);
        session()->flash('error', 'no_error');
        return ClientController::index();
    }
    public function activate($id)
    {
        $desabonne = Client::findOrfail($id);
        $desabonne->newslatter = 1;
        $desabonne->save();
        // Newsletter::subscribeOrUpdate($desabonne->email_Cli);
        session()->flash('error', 'no_error');
        return ClientController::index();
    }
    public function createCampaign()
    {
        $data = [
            'message' => "Bonjour a vous",
            'image' => ''
        ]; // Empty array
        // Mail::send('welcome', $data, function ($message) {
        //     $message->to('nurubanque@gmail.com', 'John Doe')->subject('BIENVENU!')
        //         ->Body('cccooooo');
        // });
        // return 'ok';
        Mail::to('nurubanque@gmail.com')->send(new ClientMail($data));
        return ClientController::index();
    }

    public function destroy($id)
    {
        $delete = Client::findOrfail($id);
        // Newsletter::delete($delete->email_Cli);
        $delete->delete();
        session()->flash('error', 'no_error');
        return ClientController::index();
    }
}
