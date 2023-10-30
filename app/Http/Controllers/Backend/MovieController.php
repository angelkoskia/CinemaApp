<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($id = 0){
        $id != 0 ? $movie = Movie::where('id',$id)->firstOrFail() : $movie = null;
        $movies = Movie::where('status',1)->get();
        $disabledMovies = Movie::where('status',0)->get();
        return view('backend.src.movies.index',compact('movies','movie','disabledMovies'));
    }


    public function store(Request $request, $id = 0,$status = false)
    {
        $id != 0 ? $movie = Movie::whereId($id)->firstOrFail() : $movie = new Movie();
        if($status !== false){
            $movie->status = $status;
        }else{
            if($request->hasFile('img'))
            {
                $destination_path='public/images/products';
                $image = $request->file('img');
                $img_name = $image->getClientOriginalName();
                $path = $request->file('img')->storeAs($destination_path,$img_name);
            }
            $movie->title = $request->input('title');
            $movie->img = $img_name;
            $movie->producer = $request->input('producer');
            $movie->genre = $request->input('genre');
            $movie->description = $request->input('description');
        }
        $movie->save();
        return redirect( '/admin/movies');
    }

}
