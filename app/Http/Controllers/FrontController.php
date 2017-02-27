<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function index()
    {
     return view('front.home');
    }
    public function donate()
   {
    return view('front.donate');
   }
   public function about()
  {
   return view('front.about');
  }
  public function news()
 {
  return view('front.news');
 }
 public function contact()
{
 return view('front.contact');
}
public function success()
{
return view('front.success');
}
}
