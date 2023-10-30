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
                    @foreach($movies as $movie)
                        <tr>
                            <td>{{$movie->id}}</td>
                            <td>{{$movie->title}}</td>
                            <td style="text-align: center"><img width="200px" src="{{asset('/storage/images/products/'.$movie->img)}}" alt="Movie Cover"></td>
                            <td>{{$movie->producer}}</td>
                            <td>{{$movie->genre}}</td>
                            <td class="text-wrap">{{$movie->description}}</td>
                            <td>
                                <a href="{!! url('/admin/movies/'.$movie->id) !!}" class="btn btn-primary">edit</a>
                                @if($movie->status == 1)
                                    <form action="{!! url('/admin/movies/store/'.$movie->id.'/0' ) !!}" method="post">
                                        @csrf
                                        <button class="btn btn-danger"  type="submit">deactivate</button>
                                    </form>
                                    <a href="{!! url('/admin/movies/'.$movie->id.'/tickets') !!}">
                                        <button class="btn btn-blue"  type="submit">Tickets</button>
                                    </a>
                                @else
                                    <form action="{!! url('/admin/movies/store/'.$movie->id.'/1' ) !!}" method="post">
                                        @csrf
                                        <button class="btn btn-success"  type="submit">restore</button>
                                    </form>
                                    <form action="{!! url('/admin/movies/store/'.$movie->id.'/-1' ) !!}" method="post">
                                        @csrf
                                        <button class="btn btn-danger"  type="submit">delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
