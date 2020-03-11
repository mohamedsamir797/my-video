<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Tag;
class TagsController extends Controller
{
    public function index(){
      $tags=Tag::all();
      return view('backend.tags.index',['tags'=>$tags]);
    }
    public function create(){
      return view('backend.tags.create');
    }
    public function store(Request $request){
      request()->validate([
        'name'=>'required'
      ]);
      Tag::create($request->all());
      return redirect()->route('tags.index');
    }
    public function edit($id){
      $tags = Tag::FindOrFail($id);
      return view('backend.tags.update',['tags'=>$tags]);
    }
    public function update(Request $request,Tag $tag){
      request()->validate([
        'name'=>'required',
      ]);
      $tag->update($request->all());
      return redirect()->route('tags.index');
    }
    public function destroy($id){
      $tags = Tag::FindOrFail($id);
      $tags->delete();
      return redirect()->route('tags.index');
    }

}
