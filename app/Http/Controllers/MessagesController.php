<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required'
        ]);
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();
        return redirect('/')->with('status','Message Sent');
    }
    public function showPost(){
        $posts = Message::orderBy('created_at','desc')->paginate(3);
        return view('show')->with(compact('posts'));
    }
}
