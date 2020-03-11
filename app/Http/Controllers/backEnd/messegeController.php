<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Messege;
use \App\Mail\ReplayMessege;
class messegeController extends Controller
{
    public function index(){
      $messeges = Messege::all();
      return view('backend.messege.index',['messeges'=>$messeges]);
    }
    public function create(){
      return view('backend.messege.create');
    }
    public function store(Request $request){
      request()->validate([
        'name'=>'required',
        'email'=>'required',
        'messege'=>'required',
      ]);
      Messege::create($request->all());
      return redirect()->route('messeges.index');
    }
    public function edit($id){
      $messeges = Messege::FindOrFail($id);
      return view('backend.messege.update',['messeges'=>$messeges]);
    }
    public function update(Request $request,Messege $messege){
      request()->validate([
        'name'=>'required',
        'email'=>'required',
        'messege'=>'required',
      ]);
      $messege->update($request->all());
      return redirect()->route('messeges.index');
    }
    public function destroy($id){
      $messeges = Messege::FindOrFail($id);
      $messeges->delete();
      return redirect()->route('messeges.index');
    }
  
}
