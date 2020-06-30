<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::where('active',1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
        return view('welcome', compact('posts'));
    }

    public function create(){
        return view('submit');
    }

    public function insert(Request $request){

        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:500',
        ]);

        $post = Posts::create([
            'title' => $request->title,
            'description' => $request->description,
            'active' => 1
        ]);

        return redirect()->route('index');
    }
}
