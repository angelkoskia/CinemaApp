<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
    <div class="card" id="accordionExample">
        <div class="card-header" id="headingOne">
            <button class="accordion-button @if(!$ticket) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="@if(!$ticket) false @else true @endif" aria-controls="collapseOne">
                <div class="card-header" style="border-bottom: none;">
                    <h3 class="card-title">@if(!$ticket) + New @else + Update @endif</h3>
                </div>
            </button>
        </div>
        <div id="collapseOne" class="accordion-collapse collapse @if($ticket) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@if(!$ticket) Add New @else Update @endif Movie</h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url($ticket ? '/admin/movies/'.$movie->id.'/tickets/store/'.$ticket->id : '/admin/movies/'.$movie->id.'/tickets/store') !!}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Ticket Title</label>
                                    <input type="text" @if($ticket) value="{{$ticket->title}}" @endif class="form-control" name="title" id="title" required="">
                                </div>
                                <div class="form-group">
                                    <label for="title">Ticket Price</label>
                                    <input type="text" @if($ticket) value="{{$ticket->price}}" @endif class="form-control" name="price" id="price" required="">
                                </div>
                                <div class="form-group">
                                    <label for="title">Available Tickets</label>
                                    <input type="text" @if($ticket) value="{{$ticket->quantity}}" @endif class="form-control" name="quantity" id="quantity" required="">
                                </div>
                                <div class="form-group">
                                    <label for="date">Ticket Dates</label>
                                    <input type="datetime-local" @if($ticket) value="{{$ticket->date}}" @endif class="form-control" name="date" id="date" required="">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description"cols="3" rows="3" >@if($ticket){{$ticket->description}} @endif</textarea>
                                </div>
                                <button class="btn btn-primary float-end" type="submit">submit</button>
                            </form>
                        </div>
                        @if($ticket) <a href="{!! url('/admin/movies/'.$movie->id.'/tickets/store/'.$ticket->id) !!}" class="btn btn-primary float-end" >clear_form</a> @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
