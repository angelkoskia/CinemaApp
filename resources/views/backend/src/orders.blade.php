@extends('backend.layouts.app')
@section('content')

    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Orders</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="myTables table table-bordered text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="bg-transparent border-bottom-0 w-5">Order Id</th>
                            <th class="bg-transparent border-bottom-0">Ticket Title</th>
                            <th class="bg-transparent border-bottom-0">Ticket Price</th>
                            <th class="bg-transparent border-bottom-0">Quantity</th>
                            <th class="bg-transparent border-bottom-0">Total Price</th>
                            <th class="bg-transparent border-bottom-0">Date</th>
                            <th class="bg-transparent border-bottom-0">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->ticket->title}}</td>
                                <td>${{$order->ticket->price}}</td>
                                <td>${{$order->ticket->price * $order->quantity}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{date('h:i A - d/m/Y', strtotime($order->ticket->date))}}</td>
                                <td class="text-wrap">{{$order->ticket->description}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
