<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function SubmitMsg(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'msg'=>'required',
          ]);
          $data = array('name'=>$request['name'],'email'=>$request['email'],'phone'=>$request['phone'],'subject'=>$request['subject'],'msg'=>$request['msg']);
          try{
              Mail::send('mailsView.message', $data, function($message) use ($data) {
                  $message->to($data['email'])->subject($data['subject']);
                  $message->from('atticinsulationexperts@gmail.com','AtticInsulationExpert');
                });
                session()->flash('success',"Message Submit Successfully!");
                return redirect()->back();
            }catch(Exception $e){
                session()->flash('error',"Something Went Wrong!");
                return redirect()->back();
            }
    }
    public function SubmitQuote(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'msg'=>'required',
          ]);
          $data = array('name'=>$request['name'],'email'=>$request['email'],'phone'=>$request['phone'],'msg'=>$request['msg']);
          try{
              Mail::send('mailsView.quote', $data, function($message) use ($data) {
                  $message->to($data['email'])->subject('Quote');
                  $message->from('atticinsulationexperts@gmail.com','AtticInsulationExpert');
                });
                session()->flash('success',"Quote Submit Successfully!");
                return redirect()->back();
            }catch(Exception $e){
                session()->flash('error',"Something Went Wrong!");
                return redirect()->back();
            }
    }
}
