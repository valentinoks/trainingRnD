<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bioskop;
use App\Http\Requests\BioskopRequest;

class BioskopController extends Controller
{
    public function index(){
        $bioskops = Bioskop::paginate(6);
        return view('bioskop', compact('bioskops'));
    }

    public function create(){
        return view('bioskop-form');
    }
    public function bioskopIndex(BioskopRequest $request){
        Bioskop::create([
            'name'=>$request->name,
            'location'=>$request->location            
            ]);

        return redirect('/bioskop')->with('success', 'Success input post data');
    }

    public function edit($id){
        $bioskop = Bioskop::findOrFail($id);
        return view('edit-bioskop', compact('bioskop'));
    }

    public function update(BioskopRequest $request, $id){
        Bioskop::findOrFail($id)->update([
            'name'=>$request->name,
            'location'=>$request->location
        ]);
        return redirect('/bioskop')->with('success', 'Success Update Movie Data');
    }

    public function delete($id){
        Bioskop::destroy($id);        
        return back()->with('success', 'Success Delete Movie Data');
    }

    public function show($id){
        $bioskop= Bioskop::findOrFail($id);
        return view('show-bioskop', compact('bioskop'));
    }
}
