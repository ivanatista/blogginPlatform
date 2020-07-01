<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AutoImportController extends Controller
{
    public function fetch(){
        $client = new Client();
        $posts = $client->request('GET', 'https://sq1-api-test.herokuapp.com/posts');

        $result = json_decode($posts->getBody(), true);

        // return var_dump($result);
        // return count($result["data"]);
        // $result[]
        return view('import', compact('result'));
    }

    function insert($data){

    }
}
