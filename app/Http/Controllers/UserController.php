<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Categorie;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('dashboard.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $avatars = Avatar::all();
        $roles = Role::all();
        $user = User::find($id);
        return view('dashboard.pages.user.edit', compact('avatars', 'roles', 'user'));
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

        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'age' => 'required',
            'avatar_id' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->role_id = $request->role_id;
        $user->avatar_id = $request->avatar_id;
        $user->push();
        return redirect('/dashboard/user')->with(['success' => "L'utilisateur a été mis a jour"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/dashboard/user')->with(['success' => "L'utilisateur à été supprimé"]);
    }
}
