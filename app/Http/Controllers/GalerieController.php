<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Email;
use App\Models\Galerie;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\JewsTradingController;
use Illuminate\Pagination\LengthAwarePaginator;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tab = array();
        $galeries = Galerie::all();
        foreach ($galeries as $galerie) {
            $gal = explode(' ', $galerie->image);
            array_push($tab, $gal);
        }
        $y = 0;
        if (Galerie::all()->count()) {
            $galeriePic = array();
            for ($x = 0; $x < count($tab); $x++) {
                for ($z = 0; $z < count($tab[$x]); $z++) {
                    array_push($galeriePic, $tab[$x][$z]);
                }
            }
            $galeriePic = $this->paginate($galeriePic);
        } else $galeriePic = array();
        return view('admin.galerieAddAlter', ['galeries' => $galeriePic]);
    }

    public function paginate($items, $perPage = 9, $page = null, $options = [])

    {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = Validator($request->all(), [
            'categories' => 'required',
            // 'file1[]' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            // 'comments' => 'min:0|max:100'
        ]);
        if ($validate->fails()) {
            session()->flash('error', 'one_thing_not_running');
            return redirect()->back();
        }
        $galerie = new Galerie;
        $galerie->categories = request('categories');
        if (!request('count')) $count = 1;
        else $count = request('count');
        $tab = array();
        for ($i = 1; $i <= $count; $i++) {
            foreach ($request->file('file' . $i) as $file1) {
                $file = Str::random(5);
                $ext = $file1->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $file1->storeAs(
                    'images/galeries',
                    $fileName,
                    'public'
                );
                array_push($tab, $fileName);
            }
        }
        $files = implode(' ', $tab);
        $galerie->image = $files;
        $galerie->comments = request('comments');
        $galerie->save();
        session()->flash('error', 'no_error');
        return GalerieController::admin();
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
    public function destroy($id)
    {
        $tab = array();
        $galeries = Galerie::all();
        foreach ($galeries as $galerie) {
            // Suppressions une a une d'une photo selectionner par l'admin

            $gal = Galerie::find($galerie->id);
            $tab = explode(' ', $galerie->image);
            if (in_array($id, $tab)) {
                array_splice($tab, array_search($id, $tab), 1);
                $gal->image = implode(' ', $tab);
                $gal->save();
                if (strlen(implode(' ', $tab)) < 1) $gal->delete();
                Storage::disk('public')->delete('images/galeries/' . $id);
                Storage::disk('public')->delete('images/produits/' . $id);
                return GalerieController::admin();
            }
        }
        return GalerieController::admin();
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
