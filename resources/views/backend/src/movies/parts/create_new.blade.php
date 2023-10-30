<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
    <div class="card" id="accordionExample">
        <div class="card-header" id="headingOne">
            <button class="accordion-button @if(!$movie) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="@if(!$movie) false @else true @endif" aria-controls="collapseOne">
                <div class="card-header" style="border-bottom: none;">
                    <h3 class="card-title">@if(!$movie) + New @else + Update @endif</h3>
                </div>
            </button>
        </div>
        <div id="collapseOne" class="accordion-collapse collapse @if($movie) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@if(!$movie) Add New @else Update @endif Movie</h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url($movie ? '/admin/movies/store/'.$movie->id : '/admin/movies/store' ) !!}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Movie Title</label>
                                    <input type="text" @if($movie) value="{{$movie->title}}" @endif class="form-control" name="title" id="title" required="">
                                </div>
                                <div class="form-group">
                                    <label for="img">Movie Cover</label>
                                    <input type="file" @if($movie) @endif class="form-control-file" name="img" id="img" required="">
                                </div>
                                <div class="form-group">
                                    <label for="producer">Movie Producer</label>
                                    <input type="text" @if($movie) value="{{$movie->producer}}" @endif class="form-control" name="producer" id="producer" required="">
                                </div>
                                <div class="form-group">
                                    <label for="genre" class="form-label"> Select a movie genre</label>
                                    <select name="genre" id="genre" class="form-control select2-show-search form-select" data-placeholder="Choose one">
                                        <option @if($movie && $movie->genre == 'horror') selected @endif value="horror">Horror</option>
                                        <option @if($movie && $movie->genre == 'action') selected @endif value="action">Action</option>
                                        <option @if($movie && $movie->genre == 'comedy') selected @endif value="comedy">Comedy</option>
                                        <option @if($movie && $movie->genre == 'drama') selected @endif value="drama">Drama</option>
                                        <option @if($movie && $movie->genre == 'thriller') selected @endif value="thriller">Thriller</option>
                                        <option @if($movie && $movie->genre == 'adventure') selected @endif value="adventure">Adventure</option>
                                        <option @if($movie && $movie->genre == 'fantasy') selected @endif value="fantasy">Fantasy</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description"cols="3" rows="3" >@if($movie){{$movie->description}} @endif</textarea>
                                </div>

                                <button class="btn btn-primary float-end" type="submit">submit</button>
                            </form>
                        </div>
                        @if($movie) <a href="{!! url('/admin/movies') !!}" class="btn btn-primary float-end" >clear_form</a> @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
