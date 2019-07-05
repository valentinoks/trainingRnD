<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Bioskop;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::paginate(6);
        return view('movie', compact('movies'));
    } //compact utk taro data posts ke view

    public function create(){
        $bioskops = Bioskop::all();
        return view('form', compact('bioskops'));
    }
    public function movieIndex(MovieRequest $request){
        Movie::create([
            'bioskop_id'=>$request->bioskop_id,
            'title'=>$request->title,
            'synopsis'=>$request->synopsis,
            'director'=>$request->director,
            'image'=>$this->uploadImage($request->file('image')),
            'dateRelease'=>$request->dateRelease,
            ]);

        return redirect('/movie')->with('success', 'Success input post data');
    }

    public function uploadImage($image){
        $fileNameWithExt = $image->getClientOriginalName();
        $image->storeAs('public/images', $fileNameWithExt);
        return $fileNameWithExt;
    }

    public function edit($id){
        $movie = Movie::findOrFail($id);
        return view('edit-movie', compact('movie'));
    }

    public function update(MovieRequest $request, $id){
        Movie::findOrFail($id)->update([
            'title'=>$request->title,
            'synopsis'=>$request->synopsis,
            'director'=>$request->director,
            'image'=>$this->uploadImage($request->file('image')),
            'dateRelease'=>$request->dateRelease,
        ]);
        return redirect('/movie')->with('success', 'Success Update Movie Data');
    }

    public function delete($id){
        //Movie::destroy($id);
        $movie = Movie::findOrFail($id);
        Storage::delete('public/images/'.$movie->image);
        $movie->delete();
        return back()->with('success', 'Success Delete Movie Data');
    }

    public function show($id){
        $movie= Movie::findOrFail($id);
        return view('show-movie', compact('movie'));
    }
    
}



            /*$table->string('title');
            $table->string('synopsis');
            $table->string('director');
            $table->string('image');
            $table->string('dateRelease');*/

