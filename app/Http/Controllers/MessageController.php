<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function contact(Request $request)
    {
        $message = new Email;
        $Input = ['email', 'numero', 'nom', 'object', 'messages'];
        foreach ($Input as $in) {
            $message->$in = request($in);
        }
        $message->save();
        return \redirect('/');
    }
    public function readMessageModal($id)
    {

        return redirect('/admin');
    }
    public function destroy($id)
    {
        Email::findOrfail($id)->delete();
        return redirect('/admin');
    }
}
