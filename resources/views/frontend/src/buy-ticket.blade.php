@extends('frontend.layouts.app')
@section('content')
    @auth
<section>
    <div class="container">
        <h1 style="text-align: center; font-size: 40px">Proceed with your order</h1>
    </div>
</section>
<div style="border: 1px solid black; width: 30%; display: flex; margin: auto">
    <div style="margin: auto; padding: 50px">
        <form action="/movie-tickets-info/{{$ticket->id}}/buy-ticket" method="post" style="margin: auto">
            @csrf
            <label for="cardnumber">Card Number</label>
            <input type="text" name="cardnumber" placeholder="1234 5678 9123 4567">
            <label for="cardname">Cardholder Name</label>
            <input type="text" placeholder="John Doe">
            <label for="expiredate">Expiration Date</label>
            <input type="text" placeholder="MM/YYYY">
            <label for="ticketquantity">Number of Tickets</label>
            <input min="1" max="{{$ticket->quantity}}" name="ticketquantity" id="ticketquantity" type="number" placeholder="1"><br>
            <label name="displayed-value" id="displayed-value" for="displayed-value">Total Price:  </label>
            <button type="submit">Place Order</button>
        </form>
    </div>
</div>
    @else
        <section>
            <div class="container">
                <h1 style="text-align: center; font-size: 30px">You must be logged in to proceed with your order</h1>
            </div>
        </section>
        <div style="border: 1px solid black; width: 30%; display: flex; margin: auto">
            <div style="margin: auto; padding: 50px">
                <form action="/login" method="get" style="margin: auto">
                    @csrf
                    <label for="cardnumber">Card Number</label>
                    <input disabled type="text" name="cardnumber" placeholder="1234 5678 9123 4567">
                    <label for="cardname">Cardholder Name</label>
                    <input disabled type="text" placeholder="John Doe">
                    <label for="expiredate">Expiration Date</label>
                    <input disabled type="text" placeholder="MM/YYYY">
                    <label for="ticketquantity">Number of Tickets</label>
                    <input disabled min="1" max="{{$ticket->quantity}}" name="ticketquantity" id="ticketquantity" type="number" placeholder="1"><br>
                    <label name="displayed-value" id="displayed-value" for="displayed-value">Total Price: </label>
                    <button>Log In</button>
                </form>
            </div>
        </div>
    @endauth
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById('ticketquantity');
        let displayedValue = document.getElementById('displayed-value');
        const ticketPrice = <?php echo $ticket->price?>;

        displayedValue.textContent = 'Total Price $'+(1 * ticketPrice);

        quantityInput.addEventListener('input', function() {
            displayedValue.textContent = 'Total Price $'+(this.value * ticketPrice);
        });
    });
    function alert()
    {
        window.alert("You must be logged in to do that");
    }
</script>
@endsection
