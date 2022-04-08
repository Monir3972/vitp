<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Logo;

class LogoController extends Controller
{
    public function userview(){
        $data['logoCount'] = Logo::count();
      $data['alldata'] = Logo::all();
       return view('backend.viewlogo',$data);
    }
    public function add(){
       return view('backend.add-logo');
    }
    public function store(Request $request){
        $data = new Logo();
        $data->created_by =Auth::user()->id;
         if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('logos.view')->with('success','Logo insert successfully');
    }
    public function edit($id){
       $editData = Logo::find($id);
       return view('backend.edit-logo',compact('editData'));
    }
    public function update(Request $request, $id){
          $data = Logo::find($id);
           $data->updated_by =Auth::user()->id;
         if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/logo_images/'. $data->image));
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'),$filename);
            $data['image']=$filename;
         }
         $data->save();
        return redirect()->route('logos.view')->with('success','Data updated successfully');
    }
    public function delete($id){
        $logo = Logo::find($id);
        if(file_exists('public/upload/logo_images' .$logo->image) AND !empty ($logo->image)){
            unlink ('public/upload/logo_images' .$logo->image);
        }
        $logo->delete();
         return redirect()->route('logos.view')->with('success','Logo delete successfully');

    }
}
