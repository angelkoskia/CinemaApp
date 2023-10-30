@extends('frontend.layouts.app')
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Pathway Extreme', sans-serif;
        user-select:none;
        transition:all .1s;
    }

    /*body{*/
    /*    display:flex;*/
    /*    justify-content:center;*/
    /*    align-items:center;*/
    /*    min-height:100vh;*/
    /*    background:#ccc;*/
    /*    overflow:hidden;*/
    /*}*/

    .msg{
        position:absolute;
        top:10px;
        left:10px;
        color:#555;
        text-transform:uppercase;
        z-index:4;
    }

    .m-ticket{
        width:360px;
        background:#fff;
        border-radius:12px;
        overflow:hidden;
        box-shadow:0 0 25px #bbb;
        display:flex;
        flex-direction:column;
        align-items:center;
        position:relative;


    }

    a{
        text-decoration: none;
    }
a span{
    text-decoration: none;
    padding: 10px;
    font-size: medium;
}
    .m-ticket:before{
        content:"";
        position:absolute;
        left:-10px;
        top:41%;
        background:#eee;
        box-shadow:inset 0 0 25px #bbb;
        width:17px;
        height:17px;
        border-radius:50%;
    }


    .m-ticket:after{
        content:"";
        position:absolute;
        right:-10px;
        top:41%;
        background:#eee;
        box-shadow:inset 0 0 25px #bbb;
        width:17px;
        height:17px;
        border-radius:50%;
    }


    .m{
        position:absolute;
        right:-5px;
        top:15%;
        transform:rotate(270.5deg);
        font-size:.80em;
        color:#888;
    }


    .m-ticket > .movie-details{
        display:flex;
        gap:20px;
        padding:20px 20px;
    }


    .m-ticket > .movie-details > .poster{
        width:100%;
        height:120px;
        object-fit:contain;
        border-radius:8px;
        box-shadow:0 0 10px #888;
    }

    .m-ticket > .movie-details > .movie > h4{
        text-transfrom:capitalize;
        font-size:1.6em;
        margin-bottom:20px;
        width:200px;
    }


    .m-ticket > .movie-details > .movie > p{
        font-size:.80em;
        line-height:19px;
        color:#777;
    }


    .m-ticket > .info{
        width:93%;
        border-radius:20px;
        background:lightskyblue;
        color: black;
        padding:10px 0px;
        text-align:center;
        font-size:.72em;
    }



    .m-ticket > .ticket-details{
        display:flex;
        gap:20px;
        padding:20px 20px;
    }


    .m-ticket > .ticket-details > .scan{
        width:100px;
        height:100px;
    }

    .m-ticket > .ticket-details > .ticket{
        text-align:center;
        width:200px;
    }


    .m-ticket > .ticket-details > .ticket > p{
        font-size:.80em;
        line-height:19px;
        color:#777;
    }

    .m-ticket > .ticket-details > .ticket > b{
        margin-top:10px;
        display:inline-block;
        font-size:1.2em;
        font-weight:400;
    }


    .m-ticket > .ticket-details > .ticket > h6{
        text-transform:uppercase;
        font-weight:100;
        font-size:.95em;
        margin-top:10px;
    }


    .m-ticket > .info-cancel{
        width:100%;
        background:#eee;
        color:#888;
        padding:10px 0px;
        text-align:center;
        font-size:.80em;
    }


    .m-ticket > .total-amount{
        display:flex;
        justify-content:space-between;
        padding:12px 20px;
        font-weight:700;
        font-size:.90em;
        width:100%;
    }
</style>
<script>


    const ticket = document.querySelector('.m-ticket');

    const body = document.querySelector('body');

    var dragvalue;


    //for laptop & computer

    ticket.addEventListener('mousedown', ()=>{

        ticket.style.position = "absolute";
        ticket.style.cursor = "move";
        dragvalue = ticket;

    })



    document.addEventListener('mouseup', ()=>{

        dragvalue = null;

    })


    document.addEventListener('mousemove', (e)=>{

        var x = e.clientX;
        var y = e.clientY;


        dragvalue.style.cursor = "move";

        var a = body.getBoundingClientRect();


        if(x > 0 && x < a.width - 350){
            dragvalue.style.left = x + "px";
        }

        if(y > 0 && y < a.height - 400){
            dragvalue.style.top = y + "px";
        }

    })



    //for mobile touch effect

    document.addEventListener('touchstart', (e)=>{

        var x = e.touches[0].clientX;
        var y = e.touches[0].clientY;

        var a = body.getBoundingClientRect();


        if(x > 0 && x < a.width - 350){
            ticket.style.left = x + "px";
        }

        if(y > 0 && y < a.height - 400){
            ticket.style.top = y + "px";
        }

    })


    document.addEventListener('touchmove', (e)=>{

        var x = e.touches[0].clientX;
        var y = e.touches[0].clientY;

        var a = body.getBoundingClientRect();


        if(x > 0 && x < a.width - 350){
            ticket.style.left = x + "px";
        }

        if(y > 0 && y < a.height - 400){
            ticket.style.top = y + "px";
        }

    })



    document.addEventListener('touchend', (e)=>{

        ticket = null;

    })

</script>
@section('content')
    <section id="best-selling" class="leaf-pattern-overlay" style="height: 900px; margin-bottom: 0">
        <div class="corner-pattern-overlay"></div>
        <div class="container">
            <section id="billboard">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider pattern-overlay">
                                    <div class="slider-item">
                                        <div class="banner-content">
                                            <h2 class="banner-title">{{$movie->title}}</h2>
                                            <p>Genre: {{strtoupper($movie->genre)}}</p>
                                            <p>Produced by: {{$movie->producer}}</p>
                                            <p>About Movie: {{$movie->description}}</p>
                                        </div><!--banner-content-->
                                        <img src="{{asset('/storage/images/products/'.$movie->img)}}" alt="banner" class="banner-image">
                                    </div><!--slider-item-->
                            </div><!--slider-->
                        </div>
                    </div>
                </div>
            </section>
            <h3 class="item-title">Tickets</h3>
            @foreach($tickets as $ticket)
                <div class="m-ticket" style="display:inline-block; margin-right: 15px">
                    <div class="movie-details">
                        <img src="{{asset('/storage/images/products/'.$movie->img)}}" class="poster">
                        <div class="movie">
                            <h4>{{$ticket->title}}</h4>
                            <span style="font-size: medium; "><b>Ticket Details:</b> <br>{{$ticket->description}}</span><br>
                            <span style="font-size: medium; "><b>Date</b>: <br>{{date('h:i A - d/m/Y', strtotime($ticket->date))}}</span>
                        </div>
                    </div>
                    <a class="info text-center align-center" href="/movie-tickets-info/{{$ticket->id}}/buy-ticket">
                        <span>Buy</span>
                    </a>
                    <div class="ticket-details">
                        <div class="ticket">
                            <span style="font-size: medium; ">Available tickets: {{$ticket->quantity}}</span>
                        </div>
                    </div>
                    <div class="total-amount">
                        <span style="font-size: medium; ">Ticket Price</span>
                        <span style="font-size: medium; ">${{$ticket->price}}</span>
                    </div>
                </div><!---m-ticket end---->
            @endforeach

                <div class="col-md-8 col-md-offset-2" style="margin-bottom: 200px">
                    <div id="COMMENTED TABLE" >
{{--                        <table class="myTables table table-bordered text-wrap mb-0">--}}
{{--                                                                                <thead>--}}
{{--                                                                                <th style="padding: 10px; text-align: center;">Name</th>--}}
{{--                                                                                <th style="padding: 10px; text-align: center;">Price</th>--}}
{{--                                                                                <th class="text-nowrap" style="padding: 10px; text-align: center;">Tickets left</th>--}}
{{--                                                                                <th class="text-nowrap" style="padding: 10px; text-align: center;">Projection Date</th>--}}
{{--                                                                                <th style="padding: 10px; text-align: center;">Description</th>--}}
{{--                                                                                <th style="padding: 10px; text-align: center;" class="bg-transparent border-bottom-0">Actions</th>--}}
{{--                                                                                </thead>--}}
{{--                                                                                @foreach($tickets as $ticket)--}}
{{--                                                                                    @if($ticket->quantity > 0)--}}
{{--                                                                                        <tr style="text-align: center">--}}
{{--                                                                                            <td>{{$ticket->title}}</td>--}}
{{--                                                                                            <td>${{$ticket->price}}</td>--}}
{{--                                                                                            <td>{{$ticket->quantity}}</td>--}}
{{--                                                                                            <td>{{$ticket->date}}</td>--}}
{{--                                                                                            <td class="text-wrap">{{$ticket->description}}</td>--}}
{{--                                                                                            <td>--}}
{{--                                                                                                <a href="/movie-tickets-info/{{$ticket->id}}/buy-ticket">--}}
{{--                                                                                                    @csrf--}}
{{--                                                                                                    <button>Buy</button>--}}
{{--                                                                                                </a>--}}
{{--                                                                                            </td>--}}
{{--                                                                                        </tr>--}}
{{--                                                                                    @endif--}}
{{--                                                                                @endforeach--}}
{{--                                                                            </table>--}}
                    </div>
                </div>
        </div>
    </section>
@endsection
