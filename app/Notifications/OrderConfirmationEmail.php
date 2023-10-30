<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderConfirmationEmail extends Notification
{
    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Thank you for your order.')
            ->line('Order Details:')
            ->line('Movie Name: ' . $this->order->ticket->movie->name)
            ->line('Quantity: ' . $this->order->quantity)
            ->line('Total Price: ' . $this->order->total)
            ->line('Enjoy the movie!');
    }
}
