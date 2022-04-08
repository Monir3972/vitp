<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  public function userview(){
      $data['alldata'] = User::all();
       return view('backend.viewuser',$data);
    }
    public function add(){
       return view('backend.add-user');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email',
            ]);
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('userview')->with('success','Data insert successfully');
    }
    public function edit($id){
       $editData = User::find($id);
       return view('backend.edit-user',compact('editData'));
    }
    public function update(Request $request, $id){
        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('userview')->with('success','Data updated successfully');
    }
    
    public function delete($id){
        $user = User::find($id);
        if(file_exists('public/upload/user_images' .$user->image) AND !empty ($user->image)){
            unlink ('public/upload/user_images' .$user->image);
        }
        $user->delete();
         return redirect()->route('userview')->with('success','User delete successfully');

    }
}
