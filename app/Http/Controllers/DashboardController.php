<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\post;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $user_id=auth()->user()->id;
        $user_credentials=auth()->user()->credentials;
        if ($user_credentials=="user")
        {
            $user=User::find($user_id);
            return view('dashboard')->with('posts',$user->posts);
        }
        else if ($user_credentials=="admin")
        {
            $posts=post::get();
            return view('dashboard')->with('posts',$posts);
        }
        
    }
}
