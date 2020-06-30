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
        $posts = Posts::where('active',1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
        return view('/home', compact('posts'));
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

    public function showAuthorPosts($id){
        $posts = Posts::where(['author_id', $id],['active', 1])->first();
        if($posts == null){
            return index();
        }
        return view('/home', compact('posts'));
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
