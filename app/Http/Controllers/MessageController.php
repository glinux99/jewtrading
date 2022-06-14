<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

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
        return redirect('/admin');
    }
}
