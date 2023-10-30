<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index($movie_id, $id = 0){
        $id != 0 ? $ticket = Ticket::where('id',$id)->where('movie_id',$movie_id)->firstOrFail() : $ticket = null;
        $tickets = Ticket::where('status',1)->where('movie_id',$movie_id)->get();
        $disabledTickets = Ticket::where('status',0)->where('movie_id',$movie_id)->get();
        $movie = Movie::where('id', $movie_id)->first();
        return view('backend.src.tickets.index',compact('tickets','ticket','disabledTickets','movie'));
    }

    public function store(Request $request,$movie_id , $id = 0,$status = false)
    {
        $id != 0 ? $ticket = Ticket::whereId($id)->where('movie_id',$movie_id)->firstOrFail() : $ticket = new Ticket();
        if($status !== false){
            $ticket->status = $status;
        }else{
            $ticket->title = $request->input('title');
            $ticket->movie_id = $movie_id;
            $ticket->price = $request->input('price');
            $ticket->quantity = $request->input('quantity');
            $ticket->date = $request->input('date');
            $ticket->description = $request->input('description');
        }
        $ticket->save();
        return redirect( '/admin/movies/'.$movie_id.'/tickets');
    }
}
