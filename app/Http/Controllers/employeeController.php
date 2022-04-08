<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{
    public function userview(){
        $data['alldata'] = Employee::all();
       return view('backend.viewemployee',$data);
    }
    
     public function add(){
       return view('backend.add-employee');
    }
    
     public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            ]);
        $data = new Employee();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->facebook = $request->facebook;
        $data->linkedin = $request->linkedin;
        $data->github = $request->github;
        
       if($request->file('image')){
            $file = $request->file('image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/employee_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('employee.view')->with('success','Data insert successfully');
    }
     public function edit($id){
       $editData = Employee::find($id);
       return view('backend.editemployee',compact('editData'));
    }
    
     public function update(Request $request, $id){
          $data = Employee::find($id);
           $data = Employee::find($id);
            $data->name = $request->name;
            $data->designation = $request->designation;
            $data->facebook = $request->facebook;
            $data->linkedin = $request->linkedin;
            $data->github = $request->github;
            
         if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/employee_images/'. $data->image));
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/employee_images'),$filename);
            $data['image']=$filename;
         }
         $data->save();
        return redirect()->route('employee.view')->with('success','Data updated successfully');
    }
    
     public function delete($id){
        $employee = Employee::find($id);
        if(file_exists('public/upload/employee_images' .$employee->image) AND !empty ($user->image)){
            unlink ('public/upload/employee_images' .$employee->image);
        }
        $employee->delete();
         return redirect()->route('employee.view')->with('success','Employee delete successfully');

    }
}
