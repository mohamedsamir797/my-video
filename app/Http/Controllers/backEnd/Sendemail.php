<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\SendMail;
class Sendemail extends Controller
{
  public function replaymessage(Request $request){
   request()->validate([
     'mailname'=>'required',
     'mailemail'=>'required|email',
     'mailmessage'=>'required',
   ]);
   $data = array(
     'mailname' => $request->mailname ,
     'mailemail' => $request->mailemail ,
     'mailmessage' => $request->mailmessage ,
   );
   Mail::to('memosamir797@gmail.com')->send( new SendMail($data));
   return back();
  }
}
