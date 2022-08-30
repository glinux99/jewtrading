<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Images;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::join('images', 'images.user_id', 'users.id')
            ->groupby('images.user_id')->distinct()
            ->paginate(20);
        return view('admin.users.staff', ['users' => $users]);
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function profile_me()
    {
        return view('admin.profileMe');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.staffCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->except('_token', 'images'));
        $user->update(['password' => Hash::make($request['password'])]);
        if ($request->role == "admin") {
            $user->assignRole('admin');
        } else {
            $user->assignRole('staff');
        }

        if ($request->file('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/staff',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->user_id = $user->id;
                $imageSave->save();
            }
        } else {
            $imageSave = new Images;
            $imageSave->images = "assets/img/default.png";
            $imageSave->user_id = $user->id;
            $imageSave->save();
        }
        return redirect()->route('admin.staff.index');
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
        $data = User::join('images', 'images.user_id', 'users.id')
            ->where('users.id', $id)->first();
        return response()->json($data);
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
        $user = User::find($request->id)->update($request->except(['_token', 'password']));
        if ($request->password != "") {
            $user->password = (['password' => Hash::make($request['password'])]);
            $user->save();
        }
        if ($request->file('images')) {
            UserController::delete($request->id);
            foreach ($request->file('images') as $index => $image) {
                $imageSave = new Images;
                $file = Str::random(5);
                $ext = $image->getClientOriginalExtension();
                $fileName = $file . '.' . $ext;
                $path = $image->storeAs(
                    'images/staff',
                    $fileName,
                    'public'
                );
                $imageSave->images = $path;
                $imageSave->user_id = $request->id;
                $imageSave->save();
            }
        }
        return redirect()->route('admin.staff.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserController::delete($id);
        User::find($id)->delete();
        return \redirect()->route('admin.staff.index');
    }
    public function delete($id)
    {
        $images = Images::where('user_id', $id)->get();
        foreach ($images as $image) {
            if ($image != "assets/img/default.png") {
                Storage::disk('public')->delete($image->images);
            }
        }
        Images::where('user_id', $id)->delete();
    }
}
