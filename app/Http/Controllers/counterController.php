<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plugin;

class counterController extends Controller
{
     public function userview(){
        $data['alldata'] = Plugin::all();
       return view('backend.viewcounter',$data);
    }
    
     public function add(){
       return view('backend.add-counter');
    }
    
     public function store(Request $request){
        $data = new Plugin();
         $data->social_icon = $request->social_icon;
        $data->bgColor = $request->bgColor;
        $data->dataForm = $request->dataForm;
        $data->dataTo = $request->dataTo;
        $data->dataRefresh = $request->dataRefresh;
        $data->dataSpeed = $request->dataSpeed;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('counters.view')->with('success','Data insert successfully');
    }
     public function edit($id){
       $editData = Plugin::find($id);
       return view('backend.editcounter',compact('editData'));
    }
    
     public function update(Request $request, $id){
            $data = Plugin::find($id);
            $data->social_icon = $request->social_icon;
            $data->bgColor = $request->bgColor;
            $data->dataForm = $request->dataForm;
            $data->dataTo = $request->dataTo;
            $data->dataRefresh = $request->dataRefresh;
            $data->dataSpeed = $request->dataSpeed;
            $data->description = $request->description;
            $data->save();
           return redirect()->route('counters.view')->with('success','Data updated successfully');
    }
     public function delete($id){
        $counter = Plugin::find($id);
        $counter->delete();
         return redirect()->route('counters.view')->with('success','Data delete successfully');
    }
    
}
