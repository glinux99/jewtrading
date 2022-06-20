<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.alter', ['affserv' => true, 'services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = Validator($request->all(), [
            'titreService' => 'required',
            'descriptionService' => 'required'
        ]);
        if ($validate->fails()) {
            session()->flash('error', 'one_thing_not_running');
            return redirect()->back()->with('error', 'ewjniker');
        }
        $itreUS = '';
        $descUS = '';
        if ((request('titreServiceUS') == '') && (request('descriptionServiceUS') == '')) {
            $itreUS = request('titreService');
            $descUS = request('descriptionService');
        } else {
            $itreUS = request('titreServiceUS');
            $descUS = request('descriptionServiceUS');
        }
        $service = new Service;
        $service->titreService = request('titreService');
        $service->descriptionService = request('descriptionService');
        $service->titreServiceUS = $itreUS;
        $service->descriptionServiceUS = $descUS;
        $service->admin_id =
            Auth::user()->id;
        $service->save();
        session()->flash('error', 'no_error');
        return ServiceController::index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $services = Service::all();
        return view('admin.alter', ['affserv' => true, 'services' => $services]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Service::all();
        $serviceCurrent = Service::findOrfail($id);
        $service = true;
        session()->flash('serviceAff', true);
        return view('admin.alter', ['service' => true, 'affserv' => true, 'services' => $services, 'serviceCurrent' => $serviceCurrent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validate = Validator($request->all(), [
            'titreService' => 'required|string',
            'descriptionService' => 'required|string'
        ]);
        if ($validate->fails()) {
            session()->flash('error', 'one_thing_not_running');
            return redirect()->back();
        }
        $itreUS = '';
        $descUS = '';
        if (request('titreService') == '') {
            $itreUS = request('titreService');
            $descUS = request('descriptionService');
        } else {
            $itreUS = request('titreServiceUS');
            $descUS = request('descriptionServiceUS');
        }
        $service = Service::find(request('id'));
        $service->titreService = request('titreService');
        $service->descriptionService = request('descriptionService');
        $service->titreServiceUS = $itreUS;
        $service->descriptionServiceUS = $descUS;
        $service->save();
        session()->flash('error', 'no_error');
        return ServiceController::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        session()->flash('error', 'no_error');
        return ServiceController::index();
    }
}
