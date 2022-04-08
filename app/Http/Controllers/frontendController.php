<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Logo;
 use App\Models\Slider;
 use App\Models\Employee;
 use App\Models\About;
 use App\Models\Service;
 use App\Models\Portfolio;
 use App\Models\Plugin;
 use App\Models\Pacakge;
 use App\Models\clientReview;

class frontendController extends Controller
{
      public function index()
    {
         $data['logo'] =Logo::first();
         $data['sliders'] =Slider::all();
         $data['employees'] =Employee::all();
         $data['abouts'] =About::all();
         $data['services'] =Service::all();
         $data['portfolios'] =Portfolio::all();
         $data['plugins'] =Plugin::all();
         $data['pacakges'] =Pacakge::all();
         $data['reviews'] =clientReview::all();
        return view('frontend.home', $data);
    }
     
}
