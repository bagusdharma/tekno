<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListHarga;

class OrderController extends Controller
{
    public function index()
    {
        return view ('order.index');
    }

    public function show($printing){
        $current = \Auth::user();
        $lh = ListHarga::where('toko', $printing)->orderBy('ukuran', 'asc')->get();
        return view('order.form')->with('printing', $printing)->with('current', $current)->with('lists', $lh);
    }
}
