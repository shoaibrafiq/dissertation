<?php

namespace App\Http\Controllers;
use App\Category;
use App\News;
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
   $news=News::orderBy('created_at', 'desc')->paginate(100);
  return view('front.news', compact('news'));
 }
 public function show($id)
 {
   $news = News::findOrFail($id);
      return view('front.show', compact('news'));
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
