<div class="col-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tickets</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="myTables table table-bordered text-nowrap mb-0">
                    <thead>
                    <tr>
                        <th class="bg-transparent border-bottom-0 w-5">Ticket Id</th>
                        <th class="bg-transparent border-bottom-0">Title</th>
                        <th class="bg-transparent border-bottom-0">Price</th>
                        <th class="bg-transparent border-bottom-0">Quantity</th>
                        <th class="bg-transparent border-bottom-0">Date</th>
                        <th class="bg-transparent border-bottom-0">Description</th>
                        <th class="bg-transparent border-bottom-0">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->title}}</td>
                            <td>${{$ticket->price}}</td>
                            <td>{{$ticket->quantity}}</td>
                            <td>{{date('h:i A - d/m/Y', strtotime($ticket->date))}}</td>
                            <td class="text-wrap">{{$ticket->description}}</td>
                            <td>
                                <a href="{!! url('/admin/movies/'.$movie->id.'/tickets/'.$ticket->id) !!}" class="btn btn-primary">edit</a>
                                @if($ticket->status == 1)
                                    <form action="{!! url('/admin/movies/'.$movie->id.'/tickets/store/'.$ticket->id.'/0' ) !!}" method="post">
                                        @csrf
                                        <button class="btn btn-danger"  type="submit">deactivate</button>
                                    </form>
                                @else
                                    <form action="{!! url('/admin/movies/'.$movie->id.'/tickets/store/'.$ticket->id.'/1' ) !!}" method="post">
                                        @csrf
                                        <button class="btn btn-success"  type="submit">restore</button>
                                    </form>
                                    <form action="{!! url('/admin/movies/'.$movie->id.'/tickets/store/'.$ticket->id.'/-1' ) !!}" method="post">
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
