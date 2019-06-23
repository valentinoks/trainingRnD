<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::paginate(6);
        return view('movie', compact('movies'));
    } //compact utk taro data posts ke view

    public function create(){
        return view('form');
    }
    public function movieIndex(MovieRequest $request){
        Post::create([
            'title'=>$request->title,
            'synopsis'=>$request->synopsis,
            'director'=>$request->director,
            'image'=>$request->image,
            'dateRelease'=>$request->dateRelease,
        ]);
        return redirect('/movie')->with('success', 'Success input post data');
    }
    
}
            /*$table->string('title');
            $table->string('synopsis');
            $table->string('director');
            $table->string('image');
            $table->string('dateRelease');*/

