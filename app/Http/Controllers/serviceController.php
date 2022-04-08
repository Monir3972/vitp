<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class serviceController extends Controller
{
   public function userview(){
        $data['alldata'] = Service::all();
       return view('backend.viewservice',$data);
    }
    
     public function add(){
       return view('backend.add-service');
    }
    
     public function store(Request $request){
    
        $data = new Service();
        $data->first_heading = $request->first_heading;
        $data->first_description = $request->first_description;
        $data->second_heading = $request->second_heading;
        $data->second_description = $request->second_description;
        $data->icon = $request->icon;
        
      
        $data->save();
        return redirect()->route('services.view')->with('success','Data insert successfully');
    }
     public function edit($id){
       $editData = Service::find($id);
       return view('backend.editservice',compact('editData'));
    }
    
     public function update(Request $request, $id){
          $data = Service::find($id);
            $data->first_heading = $request->first_heading;
            $data->first_description = $request->first_description;
            $data->second_heading = $request->second_heading;
            $data->second_description = $request->second_description;
            $data->icon = $request->icon;
            
         $data->save();
        return redirect()->route('services.view')->with('success','Data updated successfully');
    }
    
     public function delete($id){
        $service = Service::find($id);
        $service->delete();
         return redirect()->route('services.view')->with('success','Data delete successfully');

    }
}
