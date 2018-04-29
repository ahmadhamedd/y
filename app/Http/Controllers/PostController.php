<?php

namespace App\Http\Controllers;
use App\Country;
use App\Category;
use App\Post;
use App\Image;



use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {

        $categories=Category::pluck('category_name','id');
        $countries=Country::pluck('name','id');

        return view('front.addPost',compact('categories'),compact('countries'));
    }
    public function store(Request $request)
    {
        $post=Post::create($request->all()+['user_id'=>$request->user()->id]);
        foreach ($request->images as $img)
        {
          $filname=$img-> store('public/img');
          $image=new Image();
          $image->image=basename($filname);
          $post->images()->save($image);

        }
        return back()->with('success','succssssssssssssssssssssssess :)');

              //$post->

    }

}
