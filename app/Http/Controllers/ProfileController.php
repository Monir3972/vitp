<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
     public function view(){
         $id = Auth::user()->id;
         $user = User::find($id);
      return view('backend.profile',compact('user'));
    }
  public function edit(){
         $id = Auth::user()->id;
         $editData = User::find($id);
         return view('backend.edit-profile',compact('editData'));
  }
  public function update(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'. $data->image));
            $filename = date('YmHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('userview')->with('success','Data updated successfully');
  }
  public function changepassword(){
       return view('backend.edit-password');
    }
 
    public function passwordUpdate(Request $request){
        if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password])){
            $user = User::find(Auth::user()->id);
            $user->password= bcrypt($request->new_password);
            $user->save();
            return redirect()->route('profiles.view')->with('success','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','sorry your password does not match');
        }
    }
    
}
