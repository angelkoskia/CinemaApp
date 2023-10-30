@extends('frontend.layouts.app')

@section('content')
    <section id="featured-books">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header align-center">
                        <h2 class="section-title">Your Orders</h2>
                    </div>
                    <div class="product-list" data-aos="fade-up">
                        <div class="row">
                            <form action="/download-orders"  method="get">
                                @csrf
                                <button>Download Orders</button>
                            </form>
                            @foreach($orders as $key => $order)
                                <div style="display: inline-block; margin-right: 30px; border: 1px solid black; padding: 20px; width: 30%">
                                    <div style="display: flex; flex-direction: column">
                                        <h2 style="padding: 5px; margin: 5px; text-align: center">Order {{$key+1}} info</h2>
                                        <span style="padding: 5px; margin: 5px"><b>Tickets for: </b>{{$order->ticket->title}}</span>
                                        <span style="padding: 5px; margin: 5px"><b>Ticket Price: </b>${{$order->ticket->price}}</span>
                                        <span style="padding: 5px; margin: 5px"><b>Number of tickets: </b>{{$order->quantity}}</span>
                                        <span style="padding: 5px; margin: 5px"><b>Total Price: </b>${{$order->quantity * $order->ticket->price}}</span>
                                        <span style="padding: 5px; margin: 5px"><b>Ticket Date: </b><br>{{$order->ticket->date}}</span>
                                        <span style="padding: 5px; margin: 5px"><b>Ticket Description: </b><br>{{$order->ticket->description}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div><!--ft-books-slider-->
                    </div><!--grid-->
                </div><!--inner-content-->
            </div>
        </div>
    </section>
@endsection


