<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class portfolioController extends Controller
{
     public function userview(){
        $data['alldata'] = Portfolio::all();
       return view('backend.viewportfolio',$data);
    }
    
     public function add(){
       return view('backend.add-portfolio');
    }
    
     public function store(Request $request){
      
        $data = new Portfolio();
        $data->project_link = $request->project_link;
        $data->project_title = $request->project_title;
        $data->small_description = $request->small_description;
      
        
       if($request->file('small_image')){
            $file = $request->file('small_image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_images'),$filename);
            $data['small_image']=$filename;
        }
         if($request->file('large_image')){
            $file = $request->file('large_image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_images'),$filename);
            $data['large_image']=$filename;
        }
        $data->save();
        return redirect()->route('portfolios.view')->with('success','Data insert successfully');
    }
     public function edit($id){
       $editData = Portfolio::find($id);
       return view('backend.editportfolio',compact('editData'));
    }
    
     public function update(Request $request, $id){
        $data = Portfolio::find($id);
        $data->project_link = $request->project_link;
        $data->project_title = $request->project_title;
        $data->small_description = $request->small_description;
      
        
       if($request->file('small_image')){
            $file = $request->file('small_image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_images'),$filename);
            $data['small_image']=$filename;
        }
         if($request->file('large_image')){
            $file = $request->file('large_image');
            $filename = date("Y.m.d"). $file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_images'),$filename);
            $data['large_image']=$filename;
        }
        $data->save();
        return redirect()->route('portfolios.view')->with('success','Data Update successfully');
    }
    
     public function delete($id){
        $portfolio = Portfolio::find($id);
        if(file_exists('public/upload/portfolio_images' .$portfolio->image) AND !empty ($user->image)){
            unlink ('public/upload/portfolio_images' .$portfolio->image);
        }
        $portfolio->delete();
         return redirect()->route('portfolios.view')->with('success','Data delete successfully');

    }
}
