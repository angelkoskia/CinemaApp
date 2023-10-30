<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FeaturedMovie;
use App\Models\Movie;
use Illuminate\Http\Request;
use Knp\Snappy\Pdf;

use Barryvdh\Snappy\Facades\SnappyPdf;

class ShowMovieController extends Controller
{
    public function showMovies($id = 0){
        $id != 0 ? $movie = Movie::where('id',$id)->firstOrFail() : $movie = null;
        $id != 0 ? $featured_movie = FeaturedMovie::where('id',$id)->firstOrFail() : $featured_movie = null;
        $movies = Movie::where('status',1)->get();
        $featured_movies = FeaturedMovie::where('status',1)->get();
        $disabledMovies = Movie::where('status',0)->get();
        $movieWithMostOrders = Movie::orderBy('orders', 'desc')->first();
        $count = Movie::count();
        $featured_count = FeaturedMovie::count();
        $html = '<h1>Hello Laravel Snappy</h1>';
        SnappyPdf::loadHTML($html)->download('sample.pdf');
        return view('frontend.src.home',compact('movies','movie','disabledMovies','movieWithMostOrders','count','featured_movie','featured_movies','featured_count'));
    }


}
