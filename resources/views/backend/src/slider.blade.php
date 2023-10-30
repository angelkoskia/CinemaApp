@extends('backend.layouts.app')
@section('content')
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
        <div class="card" id="accordionExample">
            <div class="card-header" id="headingOne">
                <button class="accordion-button @if(!$featured_movie) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="@if(!$featured_movie) false @else true @endif" aria-controls="collapseOne">
                    <div class="card-header" style="border-bottom: none;">
                        <h3 class="card-title">@if(!$featured_movie) + New @else + Update @endif</h3>
                    </div>
                </button>
            </div>
            <div id="collapseOne" class="accordion-collapse collapse @if($featured_movie) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">@if(!$featured_movie) Add New @else Update @endif Movie</h3>
                            </div>
                            <div class="card-body">
                                <form action="{!! url($featured_movie ? '/admin/slider/store/'.$featured_movie->id : '/admin/slider/store' ) !!}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Movie Title</label>
                                        <input type="text" @if($featured_movie) value="{{$featured_movie->title}}" @endif class="form-control" name="title" id="title" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Movie Cover</label>
                                        <input type="file" @if($featured_movie) @endif class="form-control-file" name="img" id="img" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="producer">Movie Producer</label>
                                        <input type="text" @if($featured_movie) value="{{$featured_movie->producer}}" @endif class="form-control" name="producer" id="producer" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="genre" class="form-label"> Select a movie genre</label>
                                        <select name="genre" id="genre" class="form-control select2-show-search form-select" data-placeholder="Choose one">
                                            <option @if($featured_movie && $featured_movie->genre == 'horror') selected @endif value="horror">Horror</option>
                                            <option @if($featured_movie && $featured_movie->genre == 'action') selected @endif value="action">Action</option>
                                            <option @if($featured_movie && $featured_movie->genre == 'comedy') selected @endif value="comedy">Comedy</option>
                                            <option @if($featured_movie && $featured_movie->genre == 'drama') selected @endif value="drama">Drama</option>
                                            <option @if($featured_movie && $featured_movie->genre == 'thriller') selected @endif value="thriller">Thriller</option>
                                            <option @if($featured_movie && $featured_movie->genre == 'adventure') selected @endif value="adventure">Adventure</option>
                                            <option @if($featured_movie && $featured_movie->genre == 'fantasy') selected @endif value="fantasy">Fantasy</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description"cols="3" rows="3" >@if($featured_movie){{$featured_movie->description}} @endif</textarea>
                                    </div>

                                    <button class="btn btn-primary float-end" type="submit">submit</button>
                                </form>
                            </div>
                            @if($featured_movie) <a href="{!! url('/admin/slider') !!}" class="btn btn-primary float-end" >clear_form</a> @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Movies</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center" class="myTables table table-bordered text-nowrap mb-0">
                    <thead>
                    <tr>
                        <th class="bg-transparent border-bottom-0 w-5">Id</th>
                        <th class="bg-transparent border-bottom-0">Title</th>
                        <th class="bg-transparent border-bottom-0">Cover</th>
                        <th class="bg-transparent border-bottom-0">Producer</th>
                        <th class="bg-transparent border-bottom-0">Genre</th>
                        <th class="bg-transparent border-bottom-0">Description</th>
                        <th class="bg-transparent border-bottom-0">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($featured_movies as $featured_movie)
                        <tr>
                            <td>{{$featured_movie->id}}</td>
                            <td>{{$featured_movie->title}}</td>
                            <td style="text-align: center"><img width="200px" src="{{asset('/storage/images/products/'.$featured_movie->img)}}" alt="Movie Cover"></td>
                            <td>{{$featured_movie->producer}}</td>
                            <td>{{$featured_movie->genre}}</td>
                            <td class="text-wrap">{{$featured_movie->description}}</td>
                            <td>
                                <a href="{!! url('/admin/slider/'.$featured_movie->id) !!}" class="btn btn-primary">edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
