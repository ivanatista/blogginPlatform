<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use App\Posts;

class AutoImportController extends Controller
{

    public function autoImport(){
        $newPost = $this->fetch();

        for($i=0; $i < count($newPost); $i++){
            $post = Posts::where('title',$newPost[$i]["title"])->first();
            if(is_null($post)){
                $this->insert($newPost[$i]["title"],$newPost[$i]["description"],$newPost[$i]["publication_date"]);
            }
        }

        return "Success Importing ".count($newPost)." new posts";

    }

    public function fetch(){
        $client = new Client();
        $posts = $client->request('GET', 'https://sq1-api-test.herokuapp.com/posts');

        $result = json_decode($posts->getBody(), true);

        // return var_dump($result);
        // return count($result["data"]);
        // $result[]
        // return view('import', compact('result'));

        return $result["data"];
    }

    function insert($title, $description, $publication_date){
        $post = Posts::create([
            'title' => $title,
            'description' => $description,
            'created_at' => $publication_date,
            'active' => 1,
            'author_id' => 1
        ]);
    }
}
