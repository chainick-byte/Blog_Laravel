<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class DameBlog extends Controller
{
    public function dameTodo(){
       // $blogs=Blog::all();
       $blogs=Blog::orderBY('created_at','DESC')->paginate(5);
      // $blogs->withPath('custom/url');
        return view('index')->with(['blogs'=>$blogs]);
    }
}
