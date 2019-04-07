<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function home() {
        $posts=Post::all();
        return view('welcome',compact('posts'));
    }

    public function contact() {
        return view('contact');
    }
}
