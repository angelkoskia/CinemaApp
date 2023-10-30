<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use App\Mail\OrderConfirmationEmail; // Add this line
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Add this line
use Knp\Snappy\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\View;
use Knp\Snappy;

class OrderController extends Controller
{
    public function show($movie_id)
    {
        $tickets = Ticket::where('status', 1)->where('movie_id', $movie_id)->get();
        $disabledTickets = Ticket::where('status', 0)->where('movie_id', $movie_id)->get();
        $movie = Movie::where('id', $movie_id)->first();
        return view('frontend.src.movie-tickets-info', compact('tickets', 'disabledTickets', 'movie'));
    }

    public function processPayment($ticket_id)
    {
        $ticket = Ticket::findOrFail($ticket_id);
        return view('frontend.src.buy-ticket', compact('ticket'));
    }

    public function addOrder(Request $request, $ticket_id)
    {
        $ticket = Ticket::findOrFail($ticket_id);
        $order = new Order();
        $user_id = auth()->user()->id;
        $order->user_id = $user_id;
        $order->movie_id = $ticket->movie_id;
        $order->ticket_id = $ticket->id;
        $order->quantity = $request->input('ticketquantity');
        $order->status = 1;
        $user = auth()->user();
        $user_order_count = auth()->user()->order_count++;
        $movie = Movie::findOrFail($ticket->movie_id);
        $movie->orders++;
        $movie->save();
        $user->save();
        $order->total = $order->quantity * $ticket->price;
        $order->save();
        $ticket->quantity -= $order->quantity;
        $ticket->save();

        // Send the notification to the user
        Mail::to($user->email)->send(new OrderConfirmationEmail($order, $user)); // Pass the $user variable

        return redirect('/');
    }

    public function viewOrders($id = 0)
    {
        $orders = Order::where('status', 1)->where('user_id', auth()->user()->id)->with(['user', 'ticket' => function ($q) {
            $q->with(['movie']);
        }])->get();

        return view('frontend.src.view-orders', compact('orders'));
    }

    public function downloadOrders()
    {
        // Get the orders from your database or any other source
        $orders = Order::all(); // Assuming 'Order' is your model name

        // Render the Blade view into an HTML string
        $html = View::make('frontend.src.orders-pdf', compact('orders'))->render();

        // Generate the PDF using the HTML string
        $pdf = SnappyPdf::loadHTML($html)->output();

        // Return the PDF for download
        return response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="orders.pdf"',
        ]);
    }
}
