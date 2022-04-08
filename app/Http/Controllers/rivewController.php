<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientReview;

class rivewController extends Controller
{
    public function userview(){
         $data['alldata'] = clientReview::all();
       return view('backend.viewclientReview',$data);
    }
    
     public function add(){
       return view('backend.add-clientReview');
    }
    
    public function store(Request $request){
      
        $data = new clientReview();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->company = $request->company;
      
        
       if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/clientReview_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('clients.view')->with('success','Data insert successfully');
    }
      public function edit($id){
       $editData = clientReview::find($id);
       return view('backend.editclientReview',compact('editData'));
    }
    
     public function update(Request $request, $id){
        $data = clientReview::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->company = $request->company;
      
        
       if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/clientReview_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('clients.view')->with('success','Data insert successfully');
    }
    public function delete($id){
        $review = clientReview::find($id);
        if(file_exists('public/upload/clientReview_images' .$review->image) AND !empty ($user->image)){
            unlink ('public/upload/clientReview_images' .$review->image);
        }
        $review->delete();
         return redirect()->route('clients.view')->with('success','Data delete successfully');

    }
}
