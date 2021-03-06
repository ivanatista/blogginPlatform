<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $guarded  =[];

    public function author(){
        return $this->belongsTo('App\User', 'authorId');
    }
}
