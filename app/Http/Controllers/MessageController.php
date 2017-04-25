<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{

    public function view() {

        return view('viewmessages', [
            'messages' => \App\Message::all()
        ]);

    }

    public function create(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = new Message;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

        $message->save();

        return redirect('/view');

    }

}
