<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListHarga;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view ('order.index');
    }

    public function store(Request $req){
    	$order = new Order;
    	$order->from_user = \Auth::user()->id;
    	$order->to_user = request('to_user');
    	$order->total_harga = request('total_harga');
    	$order->jenis_kertas = request('jenis_kertas');
    	$a = request('alamat');
        if( isset($a) ){
        	$order->dest = request('alamat');
        }
        else{
        	$order->dest = \Auth::user()->alamat;
        }
        $order->kontak = request('kontak');
        $order->file = request('file');
        $order->status = '1';
        $order->save();

        // TODO : sent message to printing about this order
        return redirect()->back()->with('message', 'Order sudah dilakukan. Silahkan menunggu respon dari Toko!');
    }

    public function show($printing){
        $current = \Auth::user();
        $lh = ListHarga::where('toko', $printing)->orderBy('ukuran', 'asc')->get();
        return view('order.form')->with('printing', $printing)->with('current', $current)->with('lists', $lh);
    }
}
