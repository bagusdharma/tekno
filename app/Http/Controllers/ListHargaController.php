<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListHarga;

class ListHargaController extends Controller
{
    public function index(){
        $user = \Auth::user();
    	$lists = ListHarga::where('toko', $user->id)->get();
    	return view('profile.listharga')->with('lists', $lists);
    }

    public function store(Request $requests){
        $user = \Auth::user();
    	$lh = new ListHarga;
    	$lh->toko = request('toko');
    	$lh->ukuran = request('ukuran');
    	$lh->berwarna = request('berwarna');
    	$lh->bnw = request('bnw');
    	$lh->save();
    	return redirect()->route('harga.index');
    }

    public function addHarga(Request $r){
        $user = \Auth::user();
		return view('addharga')->with('user', $user->id);
    }

    public function hapus($id){
    	$lh = ListHarga::find($id);
    	$lh->delete();
    	return back();
    }
}
