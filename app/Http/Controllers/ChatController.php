<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// public function fetchMessages()
// {
//   return Message::with('user')->get();
// }


// public function sendMessage(Request $request)
// {
//   $user = Auth::user();

//   $message = $user->messages()->create([
//     'message' => $request->input('message')
//   ]);

//   return ['status' => 'Message Sent!'];
// }
class ChatController extends Controller
{

  public function index($id){
    return view('chat.chat');
  }
}


