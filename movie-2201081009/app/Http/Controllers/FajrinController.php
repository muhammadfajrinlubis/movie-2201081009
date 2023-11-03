<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class FajrinController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function detail($id){
        $movie = Movie::find($id);
        return view('detail', compact('movie'));
    }


    public function search(Request $request)
    {
        $query = $request->input('q');
        $movies = Movie::search($query);

        return view('search', ['movies' => $movies]);
    }
   
}
