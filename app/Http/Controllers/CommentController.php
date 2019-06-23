<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentIndex(){
        $comments = Comment::paginate(6);
        return view('comment', compact('comments'));
    }
}
