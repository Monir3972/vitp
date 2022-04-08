<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class aboutController extends Controller
{
    public function userview(){
        $data['alldata'] = About::all();
       return view('backend.viewabout',$data);
    }
    
     public function add(){
       return view('backend.add-about');
    }
    
     public function store(Request $request){
       
        $data = new About();
        $data->heading = $request->heading;
        $data->description = $request->description;
       if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/about_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('about.view')->with('success','Data insert successfully');
    }
     public function edit($id){
       $editData = About::find($id);
       return view('backend.editabout',compact('editData'));
    }
    
     public function update(Request $request, $id){
          $data = About::find($id);
            $data->heading = $request->heading;
            $data->description = $request->description;
         if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/about_images/'. $data->image));
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/about_images'),$filename);
            $data['image']=$filename;
         }
         $data->save();
        return redirect()->route('about.view')->with('success','Data updated successfully');
    }
    
     public function delete($id){
        $about = About::find($id);
        if(file_exists('public/upload/about_images' .$about->image) AND !empty ($about->image)){
            unlink ('public/upload/about_images' .$about->image);
        }
        $about->delete();
         return redirect()->route('about.view')->with('success','about infos delete successfully');

    }
}
