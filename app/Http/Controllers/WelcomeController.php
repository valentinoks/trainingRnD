<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function postIndex(){
        $posts = Post::paginate(6);
        return view('post', compact('posts'));
    }

    public function commentIndex(){
        $comments = Comment::paginate(6);
        return view('comment', compact('comments'));
    }

    public function formIndex(){
        return view('form');
    }
}
