<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Category;
class CategoriesController extends Controller
{
    public function index(){
      $categorys = Category::all();
      return view('backend.category.index',['categorys'=>$categorys]);
    }
    public function create(){
      return view('backend.category.create');
    }
    public function store(Request $request){
      request()->validate([
        'name'=>'required',
        'meta_keywords'=>'required',
        'meta_des'=>'required',
      ]);
      Category::create($request->all());
      return redirect()->route('categories.index');
    }
    public function edit($id){
      $categorys = Category::FindOrFail($id);
      return view('backend.category.update',['categorys'=>$categorys]);
    }
    public function update(Request $request,Category $category){
      request()->validate([
        'name'=>'required',
        'meta_keywords'=>'required',
        'meta_des'=>'required',
      ]);
      $category->update($request->all());
      return redirect()->route('categories.index');
    }
    public function destroy($id){
      $categorys = Category::FindOrFail($id);
      $categorys->delete();
      return redirect()->route('categories.index');
    }
}
