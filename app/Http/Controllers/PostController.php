<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Posts;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $authorsPosts = Posts::where('author_id',Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        $posts = Posts::where('active',1)
            ->orderBy('created_at', 'desc')
            ->get();
        // if(is_null($authorsPosts)){
        //     return view('home', compact('posts'));
        // }else{
        //     return view('home2', compact('posts','authorsPosts'));
        // }
        return view('home2', compact('posts','authorsPosts'));
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
            'active' => 1,
            'author_id' => Auth::id()
        ]);

        return redirect()->route('home');
    }

    public function showAuthorPosts(){
        $posts = Posts::where(['author_id', Auth::id()],['active', 1]);
        if($posts == null){
            return index();
        }
        return view('home', compact('posts'));
    }

    public function toggleActive($id){
        $post = Posts::find($id);
        if($post->active){
            $post->active = 0;
        }else{
            $post->active = 1;
        }
        $post->save();

        return redirect()->route('home');
    }

    public function delete($id){
        
    }

}
