<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ListHarga;
use jeremykenedy\LaravelRoles\Models\Role;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
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
        $user = User::find($id)->toArray();
        $lh = ListHarga::where('toko', $id)->get();
        return view('profile.toko')->with('user', $user)->with('lists', $lh);
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
    public function update(User $user)
    {
        $desc = request('description');

        $user->name = request('name');
        $user->email = request('email');
        if( isset($desc) ){
            $user->description = request('description');
        }
        else {
            $user->description = NULL;
        }
        $user->alamat = request('alamat');
        $user->kecamatan = request('kecamatan');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back()->with('message', 'Profil tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upgrade(Request $request){
        $user = \Auth::user();
        if ($request->isMethod('post')){
            $role = Role::where('slug', '=', 'Printing')->first();
            $user->detachAllRoles();
            $user->attachRole($role);
            return redirect()->route('showProfile')->with('message', 'Profil berhasil diupgrade!');
            // print($user);
        }
        else if($request->isMethod('get')){
            return view('upgrade')->with('user', $user);
        }
    }

    public function showProfile(){
        $user = \Auth::user();
        return view('profile.userprofile')->with('user', $user);
    }

    public function upgradeAccount($user){

    }
}
