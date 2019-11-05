<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use App\Category;
Use App\post;


class PagesController extends Controller
{
    public function index(){
        $title='Welcome to laravel';
       // return view('pages.index',compact('title'));
       $posts=Post::orderBy('created_at','desc')->take(3)->get();
        return view('pages.index')->with('posts',$posts);
    }
    
      public function about()
    {
    $items = Category::all(['id', 'name','parent']);
    return view('pages.about', compact('items',$items));
    }   
    public function services(){
        $items = Category::all(['id', 'name','parent']);
    return view('pages.services', compact('items',$items));
    }
    
}
