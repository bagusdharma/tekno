<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\File;

class FileController extends Controller
{
   
    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'title' = '';
    //     ])
    // }

    public function post(Request $req){
    	$input = $req->all();
    	$input['file'] = time().'.'.$req->file->getClientOriginalExtension();
    	$req->file->move(public_path('files'), $input['file']);
    	$f = new File;
    	$f->path = $input['file'];
    	$f->save();
		return response()->json(['id'=>$f->id]);
    }
}
