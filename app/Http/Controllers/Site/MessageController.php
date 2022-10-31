<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function newslatter()
    {
        $newslatterCli = Client::all();
        return view('admin.newslatter.newslatter', ['newslatterCli' => $newslatterCli]);
    }
}
