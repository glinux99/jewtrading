<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizController extends Controller
{
    function changeLang($langcode)
    {

        App::setLocale($langcode);
        session()->put("lang_code", $langcode);
        return redirect()->back();
    }
}
