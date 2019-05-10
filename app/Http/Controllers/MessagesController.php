<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function storeContact (Request $request){
      $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required'
       ]);
              $message = new Message();
              $message->name = $request->get('name');
              $message->email = $request->get('email');
              $message->message = $request->get('message');
              $message->save();

              return redirect()->back()->with('status', 'Your message has been submitted successfully, we will get back to you via email shortly.');

}
public function getMessages(){
  $messages= Message::all();

  return view('messages')->with('messages',$messages);
}
    }
