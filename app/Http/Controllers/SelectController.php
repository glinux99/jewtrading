<?php

namespace App\Http\Controllers;

use App\Models\Select;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function marque(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $data = Select::select("id", "marque")
                ->where('marque', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data->unique('marque'));
    }
    public function model(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $data = Select::select("id", "model")
                ->where('model', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data->unique('model'));
    }
    public function carburateur(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $data = Select::select("id", "carburateur")
                ->where('carburateur', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($data->unique('carburateur'));
    }
    public function search($choice, $id)
    {
        $prod = Produit::where($choice, $id)->get();
        $home = new HomeController;
        return $home->produit($prod);
    }
}
