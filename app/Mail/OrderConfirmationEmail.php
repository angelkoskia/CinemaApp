<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $user;

    /**
     * Create a new message instance.
     *
     * @param  Order  $order
     * @param  User  $user
     * @return void
     */
    public function __construct(Order $order, User $user)
    {
        $this->order = $order;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.order_confirmation')
            ->subject('Order Confirmation');
    }
}
