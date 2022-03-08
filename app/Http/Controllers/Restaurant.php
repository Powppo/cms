<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class Restaurant extends Controller
{
    public function index(){
        $data = Post::all();
        return view ('homepage', compact('data'));
    }
}
