<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FeaturedMovie;
use App\Models\Order;
use Illuminate\Http\Request;

class MovieSliderController extends Controller
{
    public function index($id = 0){
        $id != 0 ? $featured_movie = FeaturedMovie::where('id',$id)->firstOrFail() : $featured_movie = null;
        $featured_movies = FeaturedMovie::where('status',1)->get();
        $disabled_movies = FeaturedMovie::where('status',0)->get();
        return view('backend.src.slider',compact('featured_movies','featured_movie','disabled_movies'));
    }

    public function store(Request $request, $id = 0,$status = false)
    {
        $id != 0 ? $featured_movie = FeaturedMovie::whereId($id)->firstOrFail() : $featured_movie = new FeaturedMovie();
        if($status !== false){
            $featured_movie->status = $status;
        }else{
            if($request->hasFile('img'))
            {
                $destination_path='public/images/products';
                $image = $request->file('img');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img')->storeAs($destination_path,$image_name);
            }
            $featured_movie->title = $request->input('title');
            $featured_movie->img = $image_name;
            $featured_movie->producer = $request->input('producer');
            $featured_movie->genre = $request->input('genre');
            $featured_movie->description = $request->input('description');
        }
        $featured_movie->save();
        return redirect( '/admin/slider');
    }

}
