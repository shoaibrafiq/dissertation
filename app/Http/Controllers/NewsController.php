<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $news=News::all();
return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories=Category::pluck('name','id');
        return view('admin.news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $formInput=$request->except('image');

      //Validation for image Uploading and  name, size, price which needs to be filled in

      $this->validate($request,[
      'title'=>'required',
      'details'=>'required',
      'date'=>'required',
      'image'=>'image|mimes:jpg,jpeg,png,gif|max:10000' //here only certain types can be uploaded and size cannot be bigger than 10000kb

      ]);

      //Image Uploading
      $image=$request->image;
      if($image){
      $imageName=$image->getClientOriginalName();
      $image->move('images',$imageName);
      $formInput['image']=$imageName;

      }


              News::create($formInput);
              return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $news = News::findOrFail($id);
      return view('front.news', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $news = News::findOrFail($id);
      $categories=Category::pluck('name','id');
      return view('admin.news.edit', compact('categories','news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $news = News::findOrFail($id);



  $input = $request->all();

  $news->fill($input)->save();

return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      News::destroy($id);
             return back();
    }
}
