<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all();
        return view('dashboard.pages.avatar.index', compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.avatar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'fileName' => 'required',
        ]);
        $store = new Avatar();
        if ($request->fileName == null) {
            $url = $request->imageLink;
            $image = file_get_contents($url);
            $imageName = substr(strrpos($url, '/'), +1);
            dd(substr(strrpos($url, '/'), +1));
            Storage::putFileAs('public/storage/img', file($image), $imageName);
            $store->name = $request->name;
            $store->fileName = $imageName;
        } else {
            Storage::put('public/storage/img', $request->file("fileName"));
            $store->name = $request->name;
            $store->fileName = $request->file('fileName')->hashName();
        }
        


        $store->save();
        return redirect('/dashboard/avatar')->with('success', "L'avatar à été rajouté avec succes !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        Storage::delete("/public/storage/img/" . $avatar->fileName);
        $users = User::all();
        foreach ($users as $user) {
            if ($user->avatar_id == $avatar->id) {
                $user->avatar_id = 1;
                $user->push();
            }
        }
        $avatar->delete();
        return redirect('/dashboard/avatar/')->with(['success'=> 'L\'avatar à été correctement supprimé', "error" => "L'avatar n'a pas été correctement supprimé"]);
    }
}
