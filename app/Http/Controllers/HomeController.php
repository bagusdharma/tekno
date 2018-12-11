<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use jeremykenedy\LaravelRoles\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Role::with('users')->where('slug', 'printing')->get()->toArray();
        $users = $users[0]['users'];

        return view('home')->with('printings', $users);
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function ornigram()
    {
        return view('ornigram');
    }

    public function privasi()
    {
        return view('privasi');
    }
}
