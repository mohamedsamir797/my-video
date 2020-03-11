<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Skill;
class Skillscontroller extends Controller
{
    public function index(){
      $skills = Skill::all();
      return view('backend.skill.index',['skills'=>$skills]);
    }
    public function create(){
      return view('backend.skill.create');
    }
    public function store(Request $request){
      request()->validate([
        'name'=>'required'
      ]);
      Skill::create($request->all());
      return redirect()->route('skills.index');
    }
    public function edit($id){
     $skills = Skill::FindOrFail($id);
      return view('backend.skill.update',['skills'=>$skills]);
    }
    public function update(Request $request,Skill $skill){
      request()->validate([
        'name'=>'required'
      ]);
      $skill->update($request->all());
      return redirect()->route('skills.index');
    }
    public function destroy($id){
      $skills = Skill::FindOrFail($id);
      $skills->delete();
      return redirect()->route('skills.index');
    }
}
