<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;
class ChatsController extends Controller
{
 	// public function __construct ()
 	// {
 	// 	$this->middleware('auth');
 	// }   

 	public function index()
 	{
 		return view('chat.index');
 	}

 	// // Fetch Chat 
 	// public function fetchMessage()
 	// {
 	// 	return Message::with('user')->get();
 	// }

 	// // send chat to db
 	// public function sendMessage(Request $request)
 	// {
 	// 	$user = Auth::user();
 	// 	$message=$user->message()->create([
 	// 		'message' => $request->input('message')
 	// 	]);

 	// 	return ['status' => 'Message Sent'];
 	// }
}
