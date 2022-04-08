<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacakge;

class pacakgeController extends Controller
{
    public function userview(){
        $data['alldata'] = Pacakge::all();
       return view('backend.view-pacakge',$data);
    }
    
    public function add(){
       return view('backend.add-pacakge');
    }
    
     public function edit($id){
       $editData = Pacakge::find($id);
       return view('backend.edit-pacakge',compact('editData'));
    }
    
      public function store(Request $request){
        $data = new Pacakge();
        $data->course_title = $request->course_title;
        $data->course_price = $request->course_price;
        $data->delivery_mode = $request->delivery_mode;
        $data->course_start = $request->course_start;
        $data->course_end = $request->course_end;
        $data->support = $request->support;
        $data->save();
        return redirect()->route('pacakges.view')->with('success','Data insert successfully');
    }
    
     public function update(Request $request, $id){
            $data = Pacakge::find($id);
            $data->course_title = $request->course_title;
            $data->course_price = $request->course_price;
            $data->delivery_mode = $request->delivery_mode;
            $data->course_start = $request->course_start;
            $data->course_end = $request->course_end;
            $data->support = $request->support;
            $data->save();
           return redirect()->route('pacakges.view')->with('success','Data updated successfully');
    }
    
     public function delete($id){
        $pacakge = Pacakge::find($id);
        $pacakge->delete();
         return redirect()->route('pacakges.view')->with('success','Data delete successfully');
    }
}
