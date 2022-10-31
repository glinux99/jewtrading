<?php

namespace App\Http\Controllers\Site;

use Exception;
use App\Models\Client;
use App\Mail\ClientMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function newslatter()
    {
        $newslatterCli = Client::all();
        return view('admin.newslatter.newslatter', ['newslatterCli' => $newslatterCli]);
    }
    public function newslatterCreate()
    {
        if (request('newslatterAuth') === '1') {
            $newslatter = new Client;
            $newslatter->name = 'Client Newslatter';
            $newslatter->email = request('email');
            $newslatter->numero = '-';
            $newslatter->adresse = "-";
            $newslatter->newslatter = "1";
            $newslatter->save();
            // if (!Newsletter::isSubscribed(request('newslatter'))) {
            //     Newsletter::subscribePending(request('newslatter'));
            // }

            return back();
        }
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
        $mail = Client::where('newslatter', 1)->select('email')->get();
        $newslatter = array();
        foreach ($mail as $email) {
            array_push($newslatter, $email->email);
        }
        // dd($newslatter);
        Mail::to($newslatter)->send(new ClientMail($data));
        try {
            foreach ($path_all as $path) {
                Storage::disk('public')->delete('images/emails/' . $path);
            }
        } catch (Exception $ex) {
            session()->flash('error', 'one_thing_not_running');
            // return ClientController::index();
        }
        return redirect()->route('admin.newslatter');
    }
}
