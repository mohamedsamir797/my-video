<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Page;
class PagesController extends Controller
{
    public function index(){
      $pages = Page::all();
      return view('backend.pages.index',['pages'=>$pages]);
    }
    public function create(){
      return view('backend.pages.create');
    }
    public function store(Request $request){
      request()->validate([
        'name'=>'required',
        'page_des'=>'required',
        'meta_keywords'=>'required',
        'meta_des'=>'required'
      ]);
      Page::create($request->all());
      return  redirect()->route('pages.index');
    }
    public function edit($id){
      $pages = Page::FindOrFail($id);
      return view('backend.pages.update',['pages'=>$pages]);
    }
    public function update(Request $request,Page $page){
      request()->validate([
        'name'=>'required',
        'page_des'=>'required',
        'meta_keywords'=>'required',
        'meta_des'=>'required'
      ]);
      $page->update($request->all());
      return redirect()->route('pages.index');
    }
    public function destroy($id){
      $pages = Page::FindOrFail($id);
      $pages->delete();
      return redirect()->route('pages.index');
    }

}
