<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;


class DashboardController extends Controller
{
   public function index () {
        $totalSale = 0;
        foreach($orders = Order::all() as $order)
        {
            $totalSale+=$order->total;
        }
        return view('backend.src.dashboard', compact('totalSale'));
    }
}
