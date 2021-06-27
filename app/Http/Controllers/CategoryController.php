<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('category.index',compact('category'));
    }
    public function create(){
        return view('category.form');
    }
    public function store(Request $request){


        $category = new Category();
        $category->name = $request->name;
        if($request->hasFile('image')){
            $file=request('image');
            $dbpath=rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'),$dbpath);
            $category->image = $dbpath;
        }
        $category->save();
        return redirect('category');
    }
    public function show($id){
        $category = Category::find($id);
        return view('category.show',compact('category'));
    }
    public function edit($id){
        $category = Category::find($id);
        return view('category.form',compact('category'));
    }
    public function update(Request $request, $id){


        $category = Category::find($id);
        $category->name = $request->name;
        if($request->hasFile('image')){
            $file=request('image');
            $dbpath=rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'),$dbpath);
            $category->image = $dbpath;
        }
        $category->save();
        return redirect('category');
    }
    public function destroy($id){
         $category = Category::find($id);
         $category->delete();
         return redirect('category');

    }
}
