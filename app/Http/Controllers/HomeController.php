<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Posts::where('active',1)
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('welcome', compact('posts'));
    }

    public function indexAsc()
    {
        $posts = Posts::where('active',1)
            ->orderBy('created_at', 'asc')
            ->get();
        
        return view('welcome', compact('posts'));
    }

}
