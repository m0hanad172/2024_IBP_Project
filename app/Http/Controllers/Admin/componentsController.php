<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\component;
use Illuminate\Http\Request;
use Session;

class componentsController extends Controller
{
    public function register_component_page(){
        if(Session::has('AdminloginId')){
            $data = User::where('id','=',Session::get('AdminloginId'))->first();
            return view('admin.components.register-component',compact('data'));
        }
        return view('login');
    }
    public function register_component(Request $request){
        $request->validate([
            'title'=>'required',
            'MadeIn'=>'required',
            'publication_date'=>'required',
            'description'=>'required|min:15|max:200',
            'price'=>'required',
            'image'=>'required',

        ]);
        $component = new component();
        $component->title = $request->title;
        $component->MadeIn = $request->MadeIn;
        $component->publication_date = $request->publication_date;
        $component->description = $request->description;
        $component->price = $request->price;
        $component->cover_image = $request->image;
        $res = $component->save();
        if($res){
            return back()->with('success','component registered successfully');
        }
        else{
            return back()->with('fail','something wrong happen.Try later');
        }
    }
    public function show_components(){
        if(Session::has('AdminloginId')){
            $data = User::where('id','=',Session::get('AdminloginId'))->first();
            $components = component::all();
            return view('admin.components.show-component',compact('data','components'));
        }
        return view('login');
    }
    public function edit_component($id){
        if(Session::has('AdminloginId')){
            $data = User::where('id','=',Session::get('AdminloginId'))->first();
            $component_data = component::where('id','=',$id)->first();
            return view('admin.components.edit-component',compact('data','component_data'));
        }
        return view('login');

    }
    public function update_component(Request $request){
        $request->validate([
            'title'=>'required',
            'MadeIn'=>'required',
            'publication_date'=>'required',
            'description'=>'required|min:15|max:200',
            'price'=>'required',
            'image'=>'required',

        ]);
        $id = $request->id;
        $title = $request->title;
        $MadeIn = $request->MadeIn;
        $publication_date = $request->publication_date;
        $description = $request->description;
        $price = $request->price;
        $cover_image = $request->image;
        $res = component::where('id','=',$id)->update([
            'id'=>$id,
            'title'=>$title,
            'MadeIn'=>$MadeIn,
            'publication_date'=>$publication_date,
            'description'=>$description,
            'price'=>$price,
            'cover_image'=>$cover_image
        ]);
        if($res){
            return back()->with('success','component updated successfully');
        }
        else{
            return back()->with('fail','something wrong happen.Try later');
        }

    }
    public function delete_component($id){

        $res = component::where('id','=',$id)->delete();
        if($res){
            return back()->with('success','component deleted successfully');
        }
        else{
            return back()->with('fail','something wrong happen.Try later');
        }

    }
}
