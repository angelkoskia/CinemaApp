@component('mail::message')
    # Order Confirmation

    Order 1 Info:
    - Movie Name: {{ $order->ticket->movie->title }}
    - Tickets for: {{ $order->ticket->title }}
    - Ticket Price: ${{ $order->ticket->price }}
    - Number of tickets: {{ $order->quantity }}
    - Total Price: ${{ $order->total }}

    Ticket Date: {{ $order->ticket->date }}
    Ticket Description: {{ $order->ticket->description }}

    If you have any questions or need further assistance, please contact our support team.

    Thank you,
    The CinemaApp Team
@endcomponent
