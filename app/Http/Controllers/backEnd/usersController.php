<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class usersController extends Controller
{
    public function index(){
      $users = \App\User::paginate(10);
      return view('backend.user.index',['users'=>$users]);
    }
    public function create(){
      return view('backend.user.create');
    }
    public function store(Request $request){
      request()->validate([
        'name'=>'required',
        'email'=> 'required',
        'password'=> 'required',
        'group'=> 'required',
      ]);
      \App\User::create($request->all());
      return redirect()->route('users.index')->with('success','user created succcessfuly');

    }
    public function edit($id){
      $users = \App\User::FindOrFail($id);
      return view('backend.user.update',['users'=>$users]);
    }
    public function update(Request $request,\App\User $user){
      request()->validate([
        'name'=>'required',
        'email'=> 'required',
        'email'=> 'required',
      ]);
      $user->update($request->all());
      return redirect()->route('users.index')->with('success','user updated succcessfuly');

   }
   public function destroy($id){
      $users = \App\User::FindOrFail($id);
      $users->delete();
      return redirect('admin/users');
   }

}
