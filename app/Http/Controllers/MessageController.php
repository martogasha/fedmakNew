<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all()->unique('sender_id');
        return view('messages',[
            'messages'=>$messages
        ]);
    }
    public function getMessage(Request $request){
        if ($request->ajax()){
            $title = Message::where('sender_id',$request->message)->first();
            $senders = Message::where('user_id',$request->message)->get();
            $receivers = Message::where('user_id',auth()->user()->id)->where('sender_id',$request->message)->get();

            $output='<div class="msg_history">
                                     <h3 class=" text-center">'.$title->sender->name.'</h3>
                                     <br>';

        }
        foreach ($senders as $sender) {


            $output .= '
                                                                     <div class="incoming_msg">
                                                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                        <div class="received_msg">
                                                            <div class="received_withd_msg">
                                                                <p>'.$sender->message.'</p>
                                                                <span class="time_date"> 11:11 AM    |    June 9</span>
                                                            </div>
                                                        </div>
                                                    </div>



        ';
        }
        foreach ($receivers as $receiver){
            $output .='  <div class="outgoing_msg">
                                                        <div class="sent_msg">
                                                            <p>'.$receiver->message.'</p>
                                                            <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                                                    </div>
                                                    ';
        }

        return response($output);

    }
    public function store(Request $request){
        $message = Message::create([
            'user_id'=>auth()->user()->id,
            'message'=>$request->input('message'),
            'status'=>0,
        ]);

        return redirect()->back()->with('success','Message sent');
    }
}
