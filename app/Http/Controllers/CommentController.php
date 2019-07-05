<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Movie;

class CommentController extends Controller
{
    public function commentIndex(){
        $comments = Comment::paginate(6);
        return view('comment', compact('comments'));
    }

    public function write(){        
        $movies = Movie::all();
        return view('comment-form', compact('movies'));
    }

    public function post(CommentRequest $request){
        Comment::create([
            'movie_id'=>$request->movie_id,
            'user'=>$request->user,
            'comment'=>$request->comment
            ]);

        return redirect('/comment')->with('success', 'Success input post comment');

    }

    public function edit($id){
        $comment = Comment::findOrFail($id);
        return view('edit-comment', compact('comment'));
    }

    public function update(CommentRequest $request, $id){
        Comment::findOrFail($id)->update([
            'user'=>$request->user,
            'comment'=>$request->comment
        ]);
        return redirect('/comment')->with('success', 'Success Update Movie Data');
    }


    public function delete($id){
        Comment::destroy($id);
        return back()->with('success', 'Success Delete Movie Data');
    }

    

   /* public function store($request){
        Comment::create($request->all());
        return redirect('/comment');
    }*/
}
